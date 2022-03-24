<!-- HEADER -->
    <header>
        <div class="container">
            <div class="header-top nav-container" id="navbar">
                <div class="row inliner">
                    <div class="col-sm-4">
                        <a href="#" class="logo">Автовыкуп</a>
                        <small>Срочный выкуп авто</small>
                    </div>
                    <div class="col-sm-4">
                       <div class="buttons">
                            <a href="#" class="btn btn-white-b" data-toggle="modal" data-target="#callback">Узнать стоимость авто</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contacts">
                            <span>Вызвать эксперта</span>
                            <a href="tel:+79272542123">+7 (927) 254-21-23</a>
                            <br>
                            <a href="tel:+79272542123">+7 (927) 531-93-87</a>
                        </div>
                        <select id="select-city" class="select-city right"></select>
                    </div>
                </div>
            </div>
            <div class="main-block content">                                                
                <h1><?= $h1 ?></h1>
                <h2>В любом состоянии</h2>
                <a href="#" data-toggle="modal" data-target="#callback" class="header-btn">Оценка авто</a>
                <h3 style="font-size: 32px; font-weight: 300;">
                    <span id="blink7">Выкупим дороже</span> чем у конкурентов <span id="blink7">на 20%!</span><br> Возьмем на себя все расходы.
                </h3>
            </div>
            <div class="form">
                <h3>Узнайте стоимость своего авто сейчас:</h3>
                <form name="form1">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Ваше имя:</label>
                                <input type="text" class="form-control" name="name" placeholder="Имя">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Ваш телефон:</label>
                                <input type="text" class="form-control phone" id="phone" name="phone" placeholder="+7 (999) 123-45-67">
                            </div>
                        </div>
                    </div>

                    <div style="float:left;margin-right:12px;">
                        <input type="checkbox" class="" name="checkbox" id="checkbox_id" value="yes" checked>
                    </div>
                    <label for="checkbox_id">
                        <div style="font-size:15px;padding-top:2px;font-weight:normal;">
                            Согласен с условиями публичной оферты, даю свое согласие на обработку персональных данных
                        </div>
                    </label>
                    <div class="text-center">
                        <button type="submit" class="btn btn-pink feedback">Узнать стоимость прямо сейчас</button>
                    </div>
                </form>
            </div>
        </div>
    </header>
<!-- / HEADER -->