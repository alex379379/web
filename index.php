{% load static %}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400" rel="stylesheet">

    <!-- Custom styles -->
    <link rel="stylesheet" href="{% static 'style.css' %}">


</head>
<body>

    <div class="general-container">
        <div class="container top-container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1 class="title">Наш магазин скоро откроется!<br>
                    Оставляйте Ваш имейл в форме ниже</h1>
                    <div>
                        <form action="" method="post" class="form-inline text-center">{% csrf_token %}
                         <div class="form-group">
                             <label>Ваш имейл: </label>
                             <input name="{{ form.email.name }}" class="form-control">
                         </div>
                         <div class="form-group">
                             <label>Ваше имя: </label>
                             <input name="{{ form.name.name }}" class="form-control">
                         </div>
                         <button type="submit" class="btn btn-primary btn-orange">Отправить</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


</body>
</html>
