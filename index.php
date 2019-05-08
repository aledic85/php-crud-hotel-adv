<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <!-- CSS: FONTAWESOME -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
     <!-- GOOGLE FONT : ROBOTO -->
     <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
     <!-- CSS: MY CSS -->
     <link rel="stylesheet" href="style.css">
     <!-- JS: JQUERY -->
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <!-- JS: MOMENT -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
     <!-- JS: CHART -->
     <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
     <!-- JS: HANDLEBARS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
     <!-- JS: MY TEMPLATE -->
     <script id="template" type="text/x-handlebars-template">
       <div class="pagante" data-id="{{id}}">
         <h2>{{name}} {{lastname}}</h2>
         <input id="addr-button" type="button" name="" value="Get Address">
         <ul>
           <li></li>
         </ul>
         <div class="fas-cont">
           <i class="fas fa-trash-alt delete"></i>
           <i class="fas fa-edit edit"></i>
         </div>
       </div>
     </script>
     <!-- JS: MY JS -->
     <script type="text/javascript" src="script.js"></script>
     <title></title>
   </head>
   <body>
     <h1>Paganti</h1>
     <div class="paganti"></div>
   </body>
 </html>
