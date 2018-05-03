<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <title>会员管理</title>
    <?php require '../views/link.php' ?>
  <link rel="stylesheet" href="./user.css">
</head>
<body>
<?php
$tab = 'user';
?>
<?php require 'top.php' ?>
<div class="user-admin">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
          <tr>
            <th>编号</th>
            <th>用户名</th>
            <th>电话</th>
            <th>邮件</th>
            <th>地址</th>
            <th>操作</th>
          </tr>
          </thead>
          <tbody class="user-tbody">

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
          <h4 class="modal-title">编辑</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-2 control-label">用户名</label>
              <div class="col-sm-10">
                <p class="form-control-static" id="username"></p>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-sm-2 control-label">电话</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="phone">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-sm-2 control-label">邮件</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-sm-2 control-label">地址</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="address">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="cancleEditUser()">取消</button>
          <button type="button" class="btn btn-primary" onclick="handleEditUser()">保存</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div>

<script>
  var userList = [];
  var pageNo = 1;
  var pageSize = 1000;
  var chooseUser = {};
  (function () {
    youhuliebiao(pageNo, pageSize);
  }());

  function youhuliebiao(pageNo, pageSize) {
    $.ajax({
      type: 'POST',
      url: '../php/user/yonghuliebiao.php',
      data: {
        pageNo: pageNo,
        pageSize: pageSize
      },
      dataType: 'json',
      success: function (res) {
        if (res.resultCode === 0) {
          var list = res.data.list;
          userList = res.data.list;
          var tempStr = '';
          list.map(function (item, index) {
            var tr = "<tr><td>" + item.id + "</td><td>" + item.username + "</td><td>" + item.phone +
              "</td><td>" + item.email + "</td><td>" + item.address +
              "</td><td><a class='user-edit' onclick='editUser(" + index + ")'>编辑</a>" +
              "<a class='user-delete' onclick='deleteUser(" + index + ")'>删除</a></td></tr>";
            tempStr += tr;
          });
          var $tbody = document.getElementsByClassName('user-tbody')[0];
          $tbody.innerHTML = tempStr;
        } else if (res.resultCode !== 0) {
          toastr.warning(res.resultMsg);
        }
      },
      error: function () {

      }
    })
  }

  // 编辑学员
  function editUser(index) {
    chooseUser = userList[index];
    document.getElementById('username').innerText = chooseUser.username;
    document.getElementById('phone').value = chooseUser.phone;
    document.getElementById('email').value = chooseUser.email;
    document.getElementById('address').value = chooseUser.address;
    $('#editModal').modal('show');
  }

  // 取消编辑学员
  function cancleEditUser() {
    chooseUser = {};
    $('#editModal').modal('hide');
  }

  // 确定编辑学员
  function handleEditUser() {
    var data = {
      id: chooseUser.id,
      phone: document.getElementById('phone').value,
      email: document.getElementById('email').value,
      address: document.getElementById('address').value
    };
    $.ajax({
      type: 'POST',
      url: '../php/user/bianjiyonghu.php',
      data: data,
      dataType: 'json',
      success: function (res) {
        if (res.resultCode === 0) {
          toastr.success('编辑成功');
          youhuliebiao(pageNo, pageSize);
          chooseUser = {};
          $('#editModal').modal('hide');
        } else {
          toastr.warning(res.resultMsg);
        }
      }
    })

  }

  function deleteUser(index) {
    chooseUser = userList[index];
    var $deleteTips = document.getElementsByClassName('delete-tips')[0];
    $deleteTips.innerHTML = "确定删除会员：" + userList[index].username + "吗？";
    $('#deleteModal').modal('show')
  }

  function handleDelete() {

    $.ajax({
      type: 'POST',
      url: '../php/user/shanchuyonghu.php',
      data: {
        id: chooseUser.id
      },
      dataType: 'json',
      success: function (res) {
        if (res.resultCode === 0) {
          chooseUser = {};
          $('#deleteModal').modal('hide');
          toastr.success('删除成功');
          youhuliebiao(pageNo, pageSize);
        } else if (res.resultCode !== 0) {
          toastr.warning(res.resultMsg);
        }
      },
      error: function () {

      }
    })
  }


</script>