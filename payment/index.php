<?php require_once '../config/function.php';?>
<!doctype html>
<html lang="en">
<head>
    <title>Docomo Demo - Rikkeisoft.com</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="#">D-Rikkei</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Setting</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Demo</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="<?php echo url(); ?>/auth"><i class="fa fa-user"></i> Author</a>
                    <a class="dropdown-item" href="<?php echo url(); ?>/payment"><i class="fa fa-money" aria-hidden="true"></i> Payment</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="col-md-4 offset-2 pt-5">
        <form action="https://payment1.smt.docomo.ne.jp/smph/trade/s/gabepb13.srv" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" method="POST">
            <div class="form-group">
                <label for="">sTerkn</label>
                <input type="text" name="sTerkn" class="form-control" value="01">
                <small id="helpId" class="text-muted">01 là thanh toán trong <strong>SP mode</strong></small>
            </div>
            <div class="form-group">
                <label for="">sSpcd</label>
                <input type="text" name="response_type" class="form-control" value="00073467601">
                <small id="helpId" class="text-muted">ID shop</small>
            </div>
            <div class="form-group">
                <label for="">sCptok</label>
                <input type="text" name="sCptok" class="form-control" value="T12345678">
                <small id="helpId" class="text-muted">Thông thường thì token có chứa thông tin sản phẩm hoặc thông tin giỏ hàng như ID để get ở các trang khác</small>
            </div>
            <div class="form-group">
                <label for="">sSpcdbs</label>
                <input type="text" name="sSpcdbs" class="form-control" value="00073467601">
                <small id="helpId" class="text-muted">Nếu thanh toán nhiều sản phẩm thì clone thành nhiều lần</small>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Author</button>
            </div>
        </form>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>