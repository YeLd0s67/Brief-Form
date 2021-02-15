 <!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <style>
        
        @font-face {
        font-family: "DejaVu Sans";
        font-style: normal;
        font-weight: 400;
        src: url("/fonts/dejavu-sans/DejaVuSans.ttf");
        /* IE9 Compat Modes */
        src: 
            local("DejaVu Sans"), 
            local("DejaVu Sans"), 
            url("/fonts/dejavu-sans/DejaVuSans.ttf") format("truetype");
        }
        body { 
            font-family: "DejaVu Sans";
            font-size: 14px;
        }
        h4{
            margin-bottom: 0px;
            }
        p{
            margin-top: 0px;
            }
            
        .box{
            width:600px;
            margin:0 auto;
        }
        .input{
            width:600px;
            border:1px solid #ccc;

        }

    </style>
    <body>
        
    <div class="container box">
    <h1 align="center">Бриф на создание Landing page</h1><br/>

    <h2 align="center">Контактная информация</h2><br/>

      <div class="form-group">
        <h4>Компания</h4>
        <div class="input">
            <p> &nbsp; &nbsp;{{ $company_name }}</p>
        </div>
    </div>
       <div class="form-group">
        <h4>Контактное лицо, должность</h4>
        <div class="input">
        <p>&nbsp; &nbsp;{{ $contact_name }}</p>
        </div>
       </div>
       <div class="form-group">
        <h4>Телефон</h4>
        <div class="input">
        <p>&nbsp; &nbsp;{{ $phone_num }}</p>
        </div>
    </div>
       <div class="form-group">
           <h4>Сайт</h4>
           <div class="input">
           <p>&nbsp; &nbsp;{{ $website }}</p>
           </div>
        </div>
       <div class="form-group">
           <h4>E-mail</h4>
           <div class="input">
           <p>&nbsp; &nbsp;{{ $email }}</p>
           </div>
       </div>
       <div class="form-group">
           <h4>Другое<br>(ICQ, Skype, Jabber и пр.)</h4>
           <div class="input">
           <p>&nbsp; &nbsp;{{ $other }}</p>
           </div>
        </div>
       
       <br/>
       <h2 align="center">О Компании</h2><br/>

      <div class="form-group">
        <h4>Сфера деятельности</h4>
        <div class="input">
        <p> &nbsp; &nbsp;{{ $area }}</p>
        </div>   
    </div>
       <div class="form-group">
        <h4>Целевая аудитория. Кто ваш клиент?<br/><p>Например: Василий, 30 лет, высшее
            образование, работа, должность.
            Женат, двое детей, квартира в
            собственности, заработок - 50
            т.р./месяц</p></h4>
            <div class="input">
            <p>&nbsp; &nbsp;{{ $goal_auditory }}</p>
            </div>
        </div>
       <div class="form-group">
        <h4>С какими регионами будем работать?<br/><p>Где проживают люди, для которых
            актуальны ваши товары/услуги?</p> </h4>
            <div class="input">
                <p>&nbsp; &nbsp;{{ $region_work }}</p>
            </div>
            </div>
       <div class="form-group">
           <h4>Преимущества компании<br/><p>Почему ваши клиенты покупают
            именно у вас?</p> </h4>
            <div class="input">
                 <p>&nbsp; &nbsp;{{ $comp_avantages }}</p>
            </div>
        </div>
       <div class="form-group">
           <h4>Уникальное торговое предложение (УТП)<br/><p>Можно ли УТП представить в цифрах?
            Например: на 12% прочнее, на 40%
            легче, 2 операции вместо 7 и т.п</p></h4>
            <div class="input">
                <p>&nbsp; &nbsp;{{ $utp }}</p>
            </div>
       </div>
       <div class="form-group">
           <h4>Год основания<br>(ICQ, Skype, Jabber и пр.)</h4>
           <div class="input">
               <p>&nbsp; &nbsp;{{ $year_found }}</p>
           </div>
        </div>
       <div class="form-group">
            <h4>Ваши основные конкуренты и их сайты<br>(ICQ, Skype, Jabber и пр.)</h4>
            <div class="input">
                <p>&nbsp; &nbsp;{{ $competitor }}</p>
            </div>
        </div>
       
       <br/>
       <h2 align="center">Постановка цели</h2><br/>

       <div class="form-group">
         <h4>Цель<br/><p>Идеальный результат: что конкретно
            должен сделать клиент, оказавшись
            на лендинге. Например, оставить
            свой телефон, позвонить, сделать
            заказ на замер/доставку/тест-драйв и
            т.п.</p></h4>
            <div class="input">
                <p> &nbsp; &nbsp;{{ $goal }}</p>
            </div>
        </div>
        <div class="form-group">
         <h4>Цель количественно<br/><p>Например, 10 заявок в сутки и т.п.</p></h4>
         <div class="input">
             <p>&nbsp; &nbsp;{{ $goal_number }}</p>
         </div>
        </div>
        <div class="form-group">
         <h4>Ближайшая проблема<br/><p>Если четкой цели нет</p> </h4>
         <div class="input">
             <p>&nbsp; &nbsp;{{ $near_problem }}</p>
        </div>
        </div>
        <div class="form-group">
            <h4>Средний чек </h4>
            <div class="input">
                <p>&nbsp; &nbsp;{{ $avg_bill }}</p>
            </div>
        </div>
        <div class="form-group">
            <h4>LTV<br/><p>Жизненный цикл клиента (сколько у
                вас купит раз 1 клиент)</p> </h4>
                <div class="input">
                    <p>&nbsp; &nbsp;{{ $ltv }}</p>
                </div>
        </div>
        <div class="form-group">
            <h4>Конверсия / воронка продаж<br/><p>если есть данные с прошлых landing
                page</p></h4>
                <div class="input">
                    <p>&nbsp; &nbsp;{{ $conversion }}</p>
                </div>
        </div>
        
        <br/>
        <h2 align="center">Информация о лендинге</h2><br/>

        <div class="form-group">
          <h4>Акции и скидки<br/><p>Действует ли сейчас какая-то акция?
            Если нет, то какую акцию можно
            сделать, исходя из того, что реально
            нужно клиентам?</p></h4>
            <div class="input">
                <p> &nbsp; &nbsp;{{ $discount }}</p>
            </div>
        </div>
         <div class="form-group">
          <h4>Истории успеха клиентов<br/><p>Приведите реальные истории успеха
            (если есть), как клиент с помощью
            вашего товара/услуги полностью
            решил свою проблему и остался очень
            доволен, получил сверх ожидаемого и
            т.п.</p></h4>
            <div class="input">
                <p>&nbsp; &nbsp;{{ $history }}</p>
            </div>
            </div>
         <div class="form-group">
            <h4>Имеются ли у вас:
                сертификаты, паспорта
                качества, свидетельства,
                патенты и другие официальные
                документы?</h4>
                <div class="input">
                    <p>&nbsp; &nbsp;{{ $golden_papers }}</p>
                </div>
        </div>
         <div class="form-group">
             <h4>Отзывы и благодарности<br/><p>Имеются ли у вас отзывы в формате
                видео, письма на фирменных бланках.
                К отзывам очень желательны
                контакты - телефон, сайт, id ВКонтакте
                и т.п.</p> </h4>
                <div class="input">
                    <p>&nbsp; &nbsp;{{ $reviews }}</p>
                </div>
            </div>
         <div class="form-group">
             <h4>Цель<br/><p>Идеальный результат: что конкретно
                должен сделать клиент, оказавшись
                на лендинге. Например, оставить свой
                телефон, позвонить, сделать заказ на
                замер/доставку/тест-драйв и т.п.</p></h4>
                <div class="input">
                    <p>&nbsp; &nbsp;{{ $goal_two }}</p>
                </div>
       </div>
         <div class="form-group">
             <h4>Цель количественно<br/><p>Например, 10 заявок в сутки и т.п.</p></h4>
             <div class="input">
                  <p>&nbsp; &nbsp;{{ $goal_number_two }}</p>
             </div>
            </div>
         <div class="form-group">
            <h4>Дополнительно<br/><p>Что бы вы хотели разместить на
                лэндинге?</p></h4>
                <div class="input">
                    <p>&nbsp; &nbsp;{{ $other_two }}</p>
                </div>
            </div>
         
         <br/>
         <h2 align="center">Дополнительные пожелания и комментарии</h2><br/>

        <div class="form-group">
          <h4>Тут вы можете высказать свои мысли и пожелания в формате свободного художника</h4>
          <div class="input">
              <p> &nbsp; &nbsp;{{ $comments }}</p>
          </div>
        </div>
         
         <br/>
    </div>

    </body>
</html>
