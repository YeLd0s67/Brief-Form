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
    </style>
    <body>
        
    <div class="container box">
    <h1 align="center">Бриф на создание Landing page</h1><br/>

      <div class="form-group">
        <h4>Компания: {{ $company_name }}</h4>
       </div>
       <div class="form-group">
        <h4>Контактное лицо: {{ $contact_name }}</h4>
       </div>
    </div>

    </body>
</html>
