        <!-- Single Page Header start -->
        <div class="container page-header py-5">
            <h1 class="text-center text-white display-6">회원가입</h1>
        </div>
        <!-- Single Page Header End -->

        <!-- Checkout Page Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <form id="frm" name="frm">
                    <div class="row g-5">
                        <div class="col-md-12 col-lg-6 col-xl-6 offset-lg-3 offset-xl-3">
                            <div class="form-item">
                                <label class="form-label my-3">이름<sup> *</sup></label>
                                <input type="text" id="user_name" name="user_name" class="form-control">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">아이디<sup> *</sup></label>
                                <input type="text" id="user_id" name="user_id" class="form-control">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">암호 <sup>*</sup></label>
                                <input type="password" id="user_password" name="user_password" class="form-control">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">암호확인<sup>*</sup></label>
                                <input type="password" id="user_password_confirm" name="user_password_confirm" class="form-control">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">이메일<sup>*</sup></label>
                                <input type="text" id="user_email" name="user_email" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-item w-100">
                                        <label class="form-label my-3">우편번호<sup>*</sup></label>
                                        <input type="text" id="postcode" name="postcode" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label class="form-label my-3">&nbsp;<sup> </sup></label>
                                    <button type="button" class="btn btn-warning px-4 w-100" onclick="postcode_open()">검색하기</button>
                                </div>
                            </div>
                            <div class="form-item">
                                <div id="wrap" style="display:none;border:1px solid;width:100%;height:300px;margin:5px 0;position:relative">
                                    <img src="//t1.daumcdn.net/postcode/resource/images/close.png" id="btnFoldWrap" style="cursor:pointer;position:absolute;right:0px;top:-1px;z-index:1" onclick="postcode_close()" alt="접기 버튼">
                                </div>
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">주소1<sup>*</sup></label>
                                <input type="text" id="addr1" name="addr1" class="form-control" readonly>
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">주소2<sup>*</sup></label>
                                <input type="text" id="addr2" name="addr2" class="form-control">
                            </div>
                            <div class="form-item">
                                <button type="button" id="signin" name="signin" class="btn border-secondary py-3 px-4 mt-4 text-uppercase w-100 text-primary">회원가입</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Checkout Page End -->

<script>
    $(function() {
        $("#signin").click(function() {
            $.ajax({
                url: "/member/signin",
                type: "POST",
                dataType: "json",
                async: true,
                data: $("#frm").serialize(),
                success: function(proc_result) {
                    // var result = proc_result.result;
                    // var message = proc_result.message;
                    // var user_referer = proc_result.user_referer;
                    // if(result == true) {
                    //     location.href = user_referer;
                    // } else {
                    //     alert(message);
                    // }
                }
            });
        });
    });
</script>