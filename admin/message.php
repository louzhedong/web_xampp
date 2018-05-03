<!DOCTYPE html>
<html lang="zh-CN">
<head>

  <title>消息发布</title>
    <?php require '../views/link.php' ?>
  <link rel="stylesheet" href="./message.css">
</head>
<body>
<?php
$tab = 'message';
?>
<?php require 'top.php' ?>
<div class="admin-message">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="operate">
        <div id="count"></div>
        <button type="button" class="btn btn-primary" onclick="addMessage()">添加</button>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
          <tr>
            <th>编号</th>
            <th>标题</th>
            <th>内容</th>
            <th>操作</th>
          </tr>
          </thead>
          <tbody class="message-tbody">

          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>

  <div class="modal fade" tabindex="-1" role="dialog" id="deleteModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">提醒</h4>
        </div>
        <div class="modal-body">
          <p class="delete-tips"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
          <button type="button" class="btn btn-primary" onclick="handleDelete()">确定</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">添加/编辑消息</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal">
            <div class="form-group">
              <label for="inputPassword" class="col-sm-2 control-label">标题</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder="请输入标题(64字以内)">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-sm-2 control-label">内容</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="content" cols="5" placeholder="请输入内容(256字以内)"></textarea>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="cancleEditMessage()">取消</button>
          <button type="button" class="btn btn-primary" onclick="handleEditMessage()">保存</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</div>

<script>
  var messageList = [];
  var chooseMessage = {};
  var pageNo = 1;
  var pageSize = 1000;

  (function () {
    xiaoxiliebiao(pageNo, pageSize);
  }());

  function xiaoxiliebiao(pageNo, pageSize) {
    $.ajax({
      type: 'POST',
      url: '../php/message/xiaoxiliebiao.php',
      data: {
        pageNo: pageNo,
        pageSize: pageSize
      },
      dataType: 'json',
      success: function (res) {
        if (res.resultCode === 0) {
          var list = res.data.list;
          messageList = res.data.list;
          var tempStr = '';
          document.getElementById('count').innerHTML = "共有" + res.data.totalCount + "条消息";
          list.map(function (item, index) {
            var tr = "<tr><td>" + item.id + "</td><td>" + item.title + "</td><td>" + item.content +
              "</td><td><a class='message-edit' onclick='editMessage(" + index + ")'>编辑</a>" +
              "<a class='message-delete' onclick='deleteMessage(" + index + ")'>删除</a></td></tr>";
            tempStr += tr;
          });
          var $tbody = document.getElementsByClassName('message-tbody')[0];
          $tbody.innerHTML = tempStr;
        } else if (res.resultCode !== 0) {
          toastr.warning(res.resultMsg);
        }
      },
      error: function () {
      }
    })
  }

  // 添加消息
  function addMessage() {
    $('#editModal').modal('show');
  }

  // 编辑消息
  function editMessage(index) {
    chooseMessage = messageList[index];
    $('#editModal').modal('show');
    document.getElementById('title').value = chooseMessage.title;
    document.getElementById('content').value = chooseMessage.content;
  }

  // 删除消息
  function deleteMessage(index) {
    chooseMessage = messageList[index];
    var $deleteTips = document.getElementsByClassName('delete-tips')[0];
    $deleteTips.innerHTML = "确定删除消息：" + messageList[index].title + "吗？";
    $('#deleteModal').modal('show')
  }

  // 确认删除
  function handleDelete() {
    var data = {
      id: chooseMessage.id
    };
    $.ajax({
      type: 'POST',
      url: '../php/message/shanchuxiaoxi.php',
      data: data,
      dataType: 'json',
      success: function (res) {
        if (res.resultCode === 0) {
          toastr.success('删除消息成功！');
          xiaoxiliebiao(pageNo, pageSize);
          chooseMessage = {};
          $('#deleteModal').modal('hide');
        } else {
          toastr.warning(res.resultMsg);
        }
      }
    });
  }

  function cancleEditMessage() {
    document.getElementById('title').value = "";
    document.getElementById('content').value = "";
    $('#editModal').modal('hide');
  };

  function handleEditMessage() {
    var title = document.getElementById('title').value;
    var content = document.getElementById('content').value;
    if (!title) {
      toastr.warning('请输入标题');
      return;
    }
    if (!content) {
      toastr.warning('内容不能为空，请输入内容');
      return;
    }

    if (title.length > 64) {
      toastr.warning('消息标题过长');
      return;
    }

    if (content.length > 256) {
      toastr.warning('消息内容过长');
      return;
    }
    if (chooseMessage.id) {  // 编辑
      var data = {
        id: chooseMessage.id,
        title: title,
        content: content
      };
      $.ajax({
        type: 'POST',
        url: '../php/message/bianjixiaoxi.php',
        data: data,
        dataType: 'json',
        success: function (res) {
          if (res.resultCode === 0) {
            toastr.success('编辑成功');
            document.getElementById('title').value = "";
            document.getElementById('content').value = "";
            xiaoxiliebiao(pageNo, pageSize);
            chooseMessage = {};
            $('#editModal').modal('hide');
          } else {
            toastr.warning(res.resultMsg);
          }
        }
      });
    } else {
      var data = {
        title: title,
        content: content
      };
      $.ajax({
        type: 'POST',
        url: '../php/message/tianjiaxiaoxi.php',
        data: data,
        dataType: 'json',
        success: function (res) {
          if (res.resultCode === 0) {
            toastr.success('添加成功');
            document.getElementById('title').value = "";
            document.getElementById('content').value = "";
            xiaoxiliebiao(pageNo, pageSize);
            chooseMessage = {};
            $('#editModal').modal('hide');
          } else {
            toastr.warning(res.resultMsg);
          }
        }
      });
    }
  }
</script>
