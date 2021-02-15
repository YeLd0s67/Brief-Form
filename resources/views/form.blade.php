
<!DOCTYPE html>
<html>
 <head>
  <title>How Send an Email in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
   p {
    margin-bottom: 0px;
    }
  </style>
 </head>
 <body>
  <br />
  <br />
  <br />
  <div class="container box">
   <h1 align="center">Бриф на создание Landing page</h1><br />
   <p align="center"><b>Подробно заполненный бриф</b> поможет нам разработать для вас грамотный и продающий landing page в
    более короткие сроки. Спасибо!</p><br />
    <p align="center"><b>Если вы затрудняетесь с заполнением брифа,</b>свяжитесь с нами любым удобным для вас способом. Мы
        заполним его вместе с вами.</p><br />
  
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif

   @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
    </div>
   @endif

   <form method="post" action="{{url('/send')}}">
    {{ csrf_field() }}
    <h3 align="center">Контактная информация</h3><br />

    <div class="form-group">
        <label>Компания</label>
        <input type="text" name="company_name" class="form-control" value="" />
       </div>
       <div class="form-group">
        <label>Контактное лицо, должность</label>
        <input type="text" name="contact_name" class="form-control" value="" />
       </div>
       <div class="form-group">
        <label>Телефон</label>
        <input type="text" name="phone_num" class="form-control" value="" />
       </div>
       <div class="form-group">
           <label>Сайт</label>
           <input type="text" name="website" class="form-control" value="" />
       </div>
       <div class="form-group">
           <label>E-mail</label>
           <input type="text" name="email" class="form-control" value="" />
       </div>
       <div class="form-group">
           <label>Другое<br>(ICQ, Skype, Jabber и пр.)</label>
           <input type="text" name="other" class="form-control" value="" />
       </div>
       
       <br/>

       <h3 align="center">О Компании</h3><br />
       <div class="form-group">
        <label>Сфера деятельности</label>
        <input type="text" name="area" class="form-control" value="" />
       </div>
       <div class="form-group">
        <label>Товары и услуги</label>
        <input type="text" name="goods" class="form-control" value="" />
       </div>
       <div class="form-group">
        <label>Целевая аудитория. Кто ваш клиент?<br/><p>Например: Василий, 30 лет, высшее
           образование, работа, должность.
           Женат, двое детей, квартира в
           собственности, заработок - 50
           т.р./месяц</p></label>
        <input type="text" name="goal_auditory" class="form-control" value="" />
       </div>
       <div class="form-group">
        <label>С какими регионами будем работать?<br/><p>Где проживают люди, для которых
           актуальны ваши товары/услуги?</p> </label>
        <input type="text" name="region_work" class="form-control" value="" />
       </div>
       <div class="form-group">
           <label>Преимущества компании<br/><p>Почему ваши клиенты покупают
               именно у вас?</p> </label>
           <input type="text" name="comp_avantages" class="form-control" value="" />
       </div>
       <div class="form-group">
           <label>Уникальное торговое предложение (УТП)<br/><p>Можно ли УТП представить в цифрах?
               Например: на 12% прочнее, на 40%
               легче, 2 операции вместо 7 и т.п</p> </label>
           <input type="text" name="utp" class="form-control" value="" />
       </div>
       <div class="form-group">
           <label>Год основания</label>
           <input type="number" name="year_found" class="form-control" value="" />
       </div>
       <div class="form-group">
        <label>Ваши основные конкуренты и их сайты</label>
        <input type="text" name="competitor" class="form-control" value="" />
    </div>
       <br/>

       <h3 align="center">Постановка цели</h3><br />
       <div class="form-group">
        <label>Цель<br/><p>Идеальный результат: что конкретно
            должен сделать клиент, оказавшись
            на лендинге. Например, оставить
            свой телефон, позвонить, сделать
            заказ на замер/доставку/тест-драйв и
            т.п.</p></label>
        <input type="text" name="goal" class="form-control" value="" />
       </div>
       <div class="form-group">
        <label>Цель количественно<br/><p>Например, 10 заявок в сутки и т.п.</p></label>
        <input type="number" name="goal_number" class="form-control" value="" />
       </div>
       <div class="form-group">
        <label>Ближайшая проблема<br/><p>Если четкой цели нет</p> </label>
        <input type="text" name="near_problem" class="form-control" value="" />
       </div>
       <div class="form-group">
        <label>Средний чек</label>
        <input type="text" name="avg_bill" class="form-control" value="" />
       </div>
       <div class="form-group">
        <label>LTV<br/><p>Жизненный цикл клиента (сколько у
            вас купит раз 1 клиент)</p> </label>
           <input type="text" name="ltv" class="form-control" value="" />
       </div>
       <div class="form-group">
           <label>Конверсия / воронка продаж<br/><p>если есть данные с прошлых landing
            page</p></label>
           <input type="text" name="conversion" class="form-control" value="" />
       </div>
       <br/>

       <h3 align="center">Информация о лендинге</h3><br />
       <div class="form-group">
        <label>Акции и скидки<br/><p>Действует ли сейчас какая-то акция?
            Если нет, то какую акцию можно
            сделать, исходя из того, что реально
            нужно клиентам?</p></label>
        <input type="text" name="discount" class="form-control" value="" />
       </div>
       <div class="form-group">
        <label>Истории успеха клиентов<br/><p>Приведите реальные истории успеха
            (если есть), как клиент с помощью
            вашего товара/услуги полностью
            решил свою проблему и остался очень
            доволен, получил сверх ожидаемого и
            т.п.</p></label>
        <input type="text" name="history" class="form-control" value="" />
       </div>
       <div class="form-group">
        <label>Имеются ли у вас:
            сертификаты, паспорта
            качества, свидетельства,
            патенты и другие официальные
            документы?</label>
        <input type="text" name="golden_papers" class="form-control" value="" />
       </div>
       <div class="form-group">
        <label>Отзывы и благодарности<br/><p>Имеются ли у вас отзывы в формате
            видео, письма на фирменных бланках.
            К отзывам очень желательны
            контакты - телефон, сайт, id ВКонтакте
            и т.п.</p></label>
        <input type="text" name="reviews" class="form-control" value="" />
       </div>
       <div class="form-group">
        <label>Цель<br/><p>Идеальный результат: что конкретно
            должен сделать клиент, оказавшись
            на лендинге. Например, оставить свой
            телефон, позвонить, сделать заказ на
            замер/доставку/тест-драйв и т.п.</p> </label>
           <input type="text" name="goal_two" class="form-control" value="" />
       </div>
       <div class="form-group">
           <label>Цель количественно<br/><p>Например, 10 заявок в сутки и т.п.</p></label>
           <input type="text" name="goal_number_two" class="form-control" value="" />
       </div>
       <div class="form-group">
        <label>Дополнительно<br/><p>Что бы вы хотели разместить на
            лэндинге?</p></label>
        <input type="text" name="other_two" class="form-control" value="" />
    </div>

    <h3 align="center">Дополнительные пожелания и комментарии</h3><br/>
    <div class="form-group">
        <label>Тут вы можете высказать свои мысли и пожелания в формате свободного художника</label>
           <textarea type="text" name="comments" class="form-control" value=""></textarea>
       </div><br/>
       <p align="center"><b>Если вы затрудняетесь с заполнением брифа,</b>свяжитесь с нами любым удобным для вас способом. Мы
        заполним его вместе с вами.</p><br />
       <div align="right" class="form-group">
           <input type="submit" name="send" class="btn btn-info" value="Отправить" />
       </div>
   </form>
   
  </div>
 </body>
</html>