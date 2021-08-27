<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="main">
    <hr>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <h1 style="text-align:center">
        <br>
        <p style="color:white">Bem-Vindo ao seu Recibo </p><br>
        <a href="https://imgbb.com/"><img src="https://i.ibb.co/ZmbS2ty/gestao-livros-Easy-Resize-com.jpg"
                                          alt="gestao-livros-Easy-Resize-com" border="0"></a>
    </h1>
    <hr>
    <div class="container">
        <div class="post-comments">
            <br><span class="fa fa-user"></span>{{App\Models\::calcular()}}
            <br><span class="fa fa-book"></span>{{}}
            <i class="fa fa-calendar-times-o" aria-hidden="true"></i>
        </div>
    </div>
</div>
<style>
    div.main {
        background: #0264d6; /* Old browsers */
        background: -moz-radial-gradient(center, ellipse cover, #0264d6 1%, #1c2b5a 100%); /* FF3.6+ */
        background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(1%, #0264d6), color-stop(100%, #1c2b5a)); /* Chrome,Safari4+ */
        background: -webkit-radial-gradient(center, ellipse cover, #0264d6 1%, #1c2b5a 100%); /* Chrome10+,Safari5.1+ */
        background: -o-radial-gradient(center, ellipse cover, #0264d6 1%, #1c2b5a 100%); /* Opera 12+ */
        background: -ms-radial-gradient(center, ellipse cover, #0264d6 1%, #1c2b5a 100%); /* IE10+ */
        background: radial-gradient(ellipse at center, #0264d6 1%, #1c2b5a 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0264d6', endColorstr='#1c2b5a', GradientType=1); /* IE6-9 fallback on horizontal gradient */
        height: relative;
        width: 100%;
    }

    .post-comments {
        padding-bottom: 9px;
        margin: 5px 0 5px;
    }

    .comments-nav {
        border-bottom: 1px solid #eee;
        margin-bottom: 5px;
    }

    .post-comments .comment-meta {
        border-bottom: 1px solid #eee;
        margin-bottom: 5px;
    }

    .post-comments .media {
        border-left: 1px dotted #000;
        border-bottom: 1px dotted #000;
        margin-bottom: 5px;
        padding-left: 10px;
    }

    .post-comments .media-heading {
        font-size: 12px;
        color: grey;
    }

    .post-comments .comment-meta a {
        font-size: 12px;
        color: grey;
        font-weight: bolder;
        margin-right: 5px;
    }

</style>
