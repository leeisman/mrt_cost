<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MRT 常客計算機</title>
    <!-- Fonts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <!-- Styles -->
</head>
<style>
    .mg-bt-5 {
        margin-bottom: 5vw;
    }
</style>
<body>
<div>
    <div class="container-fluid">
        <div class="container-md">
            <h1 class="display-4">MRT 常客計算機</h1>
            <div class="input-group mg-bt-5">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="span-times">搭乘次數</span>
                </div>
                <input id="times" type="number" class="form-control" aria-label="Sizing example input"
                       aria-describedby="span-times">
            </div>

            <div class="input-group mg-bt-5">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="span-times">平均搭乘價格</span>
                </div>
                <input id="price" type="number" class="form-control" aria-label="Sizing example input"
                       aria-describedby="span-times">
            </div>

            <div class="input-group mg-bt-5">
                <div class="input-group-prepend">
                    <span class="input-group-text btn btn-primary btn-lg" id="count">按此計算總價</span>
                </div>
                <input id="total" disabled="disabled" class="form-control" aria-label="Sizing example input"
                       aria-describedby="span-times">
            </div>
        </div>
    </div>

</div>
</body>

<script>
    $("#count").click(function () {
        times = $("#times").val();
        price = $("#price").val();

        console.log(price);
        console.log(times);

        $.ajax({
            "url": "/api/mrt_cost",
            "data": {
                "mrt_price": price,
                "times": times,
            },
            success: function (result) {
                console.log(result)
                if (result.total_cost) {
                    $("#total").val(result.total_cost);
                }
            }
        })
    })

</script>
</html>
