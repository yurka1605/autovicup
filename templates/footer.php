<?php 
    require_once('blocks/footer.php');
    require_once('blocks/modals.php');
?>

    <!-- SCRIPTS -->
    <script>
        //Код jQuery, установливающий маску для ввода телефона элементу input
        //1. После загрузки страницы,  когда все элементы будут доступны выполнить...
        $(function(){
            //2. Получить элемент, к которому необходимо добавить маску
            $.mask.definitions['h'] = "[0|1|3|4|5|6|7|9]"
            $("#phone3").mask("+7(h99) 999-9999");
        });
    </script>
    <script src="/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="/libs/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="/js/jquery.fancybox.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/js/jquery.nice-select.js"></script>
    <script src="/js/main.js"></script>
    <script src="/feedback/js/feedback.js"></script>
    <div class="modal2" id="responseMessage">
        <h2 style="margin-bottom: 20px;">Статус отправки формы:</h2>
        <div class="modal-content"></div>
        <br />
        <a href="#" class="fancyClose">ok</a>
    </div>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(55674400, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
    });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/55674400" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <a href="https://api.whatsapp.com/send?phone=79272542123" target="_blank" title="Написать в Whatsapp" rel="noopener noreferrer">
        <div class="whatsapp-button"><i class="fa fa-whatsapp"></i></div>
    </a>
</body>
</html>