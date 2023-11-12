<footer class="box_footer row mb demo">
    <div id="footer">
        <div class="footer-left">
            <div class="footer-logo">
                <img src="./view/img/logo.png" alt="" />
            </div>
            <div class="card_1">
                <h3>Levents® - Share your color with the world</h3> <br>
                <div>
                    <i class="fa-sharp fa-solid fa-location-pin"></i>
                    <p>
                        139E Nguyễn Trãi, Phường Bến Thành, Quận 1, HCM - COMING SOON
                    </p>
                </div>

                <div>
                    <i class="fa-solid fa-phone-flip"></i>
                    <p>Hotline: 0345.952.811</p>
                </div>

                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <p>Email: datnvph32055@fpt.edu.vn</p>
                </div>

                <p>Số ĐKKD: 0106341306. Ngày cấp: 16/03/2017.</p>
                <div class="icons">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-square-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-square-twitter"></i>
                    <i class="fa-brands fa-google-plus"></i>
                </div>

            </div>
        </div>
        <div class="footer-right">
            <div class="card_2">
                <h3>VỀ CHÚNG TÔI</h3>
                <a href="#">Giới thiệu về Levents</a>
                <a href="gioithieu.html">Nhượng quyền</a>
                <a href="">Tin tức khuyến mại</a>
                <a href="">Cửa hàng</a>
                <a href="#">Quy định chung</a>
            </div>
            <div class="card_3">
                <h3>CHÍNH SÁCH</h3>
                <a href="#">Chính sách thành viên</a>
                <a href="#">Hình thức thanh toán</a>
                <a href="#">Vận chuyển giao nhận</a>
                <a href="#">Đổi trả và hoàn tiền</a>
                <a href="#">Bảo vệ thông tin cá nhân</a>
                <a href="#">Bảo hành</a>
            </div>
        </div>
    </div>
</footer>
<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 1000);
    }
</script>