<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>نمایش متن و فونت لوکال هاست</title>
    <link rel="shortcut icon" href="assets/ico/font.jpg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<section id="main-box" class="d-flex align-items-center justify-content-center">
    <div class="box-modal mt-3  shadow rounded bg-light">
        <ul class="nav nav-pills border p-2 position-relative" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                   aria-controls="pills-home" aria-selected="true">وارد کردن نوشته</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                   aria-controls="pills-profile" aria-selected="false">نمایش جدول فونتها</a>
            </li>
            <li class="counter-box">
            <span id="count-font"  class="count-font"></span> <span id="avaleble-font"  class="count-font"> </span>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade h-100 show active" id="pills-home" role="tabpanel"
                 aria-labelledby="pills-home-tab">
                <div class="header-tab   bg-dark p-2">
                    <h5 class="h5 text-center text-white">ایجاد نوشته</h5>
                    <p class="text-center text-white-50">بر روی دکمه ی زیر بزنید و نوشته ی خود را وارد کنید</p>
                </div>
                <div class="body-tab p-5 mt-5 w-100  d-block text-center     h-100 text-center">
                    <button data-toggle="modal" type="button" data-target="#add-text"
                            class="btn btn-outline-primary   pt-3  pb-3 pr-2 pl-2 rounded d-inline-block mt-5">نوشته ی
                        خود را ایجاد کن
                    </button>
                    <p class="text-center mt-3"><span id="alert" class="text-success">نوشته در تب، جدول فونتها فعال شد</span></p>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="header-tab position-relative  bg-dark p-2">

                    <h5 class="h5 text-center text-white">جدول فونت</h5>
                    <p class="text-center text-white-50">جدول زیر تمام فونت های موجود داخل لوکال را نمایش میدهد</p>
                </div>
                <div class="body-tab table-fonts">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th class="bg-dark position-relative text-white " style="width: 10%;" scope="col">   ردیف</th>
                            <th class="bg-dark text-white " style="width: 60%;" scope="col">نوشته</th>
                            <th class="bg-dark text-white " style="width:30%" scope="col"> نام فونت<small> (ترتیب براساس
                                حروف الفبا) </small></th>
                            <th class="bg-dark text-white " style="width:10%;" scope="col">نوع فونت</th>
                        </tr>
                        </thead>
                        <tbody id="fonts-tbl">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL -->
    <div class="modal fade" id="add-text" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">متن تستی</h5>
                    <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <textarea placeholder="نوشته ی دلخواه را وارد کنید" class="form-control" id="text-test"
                                  aria-describedby="emailHelp"></textarea>
                        <span class=" text-danger" id="alert-empty" >لطفا متنی را وارد کنید و تائید را بزنید</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">خروج</button>
                    <button  id="submit-text" class="btn btn-primary d-flex align-items-center" type="button" >
                        نمایش فونت ها


                    </button>

                </div>
            </div>
        </div>
    </div>
</section>


<!--JQUERY-->
<script src="assets/js/jquery/jquery-3.5.1.js" type="text/javascript"></script>
<script src="assets/js/jquery/jquery-3.5.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/css/bootstrap/js/bootstrap.min.js"></script>
<!--JS-->
<script src="assets/js/js.js" type="text/javascript"></script>
<script>

</script>
</body>
</html>