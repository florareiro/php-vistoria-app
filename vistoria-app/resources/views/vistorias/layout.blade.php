<!DOCTYPE html>
<html>
<head>
    <title>Vistoria Go</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  
<div class="row px-5 bg-dark text-white">
    <div class="col-lg-12">
        <div class="float-left mt-3">
            <h2>Vistoria Go</h2>
        </div>
        <div class="float-right">
            <img src="/logo2.png" alt="" width="80px">
        </div>
    </div>
</div>
<div class="container py-4 ">

    @yield('content')
</div>
<footer class="row px-5 bg-dark fixed-bottom text-white">
    <div class="col-lg-12">
        <div class="float-left mx-5">
            <p>
            Endereço: Rua dr Baeta Neves n° 114 
            <br> 
            Baeta Neves - São Bernardo do campo - 09784260
            <br>
            E-mail: suporte@vistoriago.com.br
            </p>
        </div>
        <div class="float-right mr-5">
            <img src="/logo2.png" alt="" class=""width="60px">
        </div>
    </div>
</footer>

</body>
</html>