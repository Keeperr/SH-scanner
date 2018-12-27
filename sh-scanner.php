<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>SH-scanner v1.0</title>

<style>

h1.page-header {
    margin-top: -5px;
}

.sidebar {
    padding-left: 0;
}

.main-container {
    padding-top: 15px;
    margin-top: -20px;
}

.footer {
    width: 100%;
}

.logo-scanner {
    width: 302px;
    padding: 12px;
    margin-top: -15px;
    border-bottom: 2px dotted #d2d2d2;
}

.navbar-brand {
    padding-top: 5px !important;
    padding-bottom: 5px !important;
}

.green-check {
    padding: 5px;
    border: 1px solid #b9b9b9;
    background-color: #dcffca;
}

.orange-mark {
    padding: 5px;
    color: #000000;
    padding-bottom: 1px;
    border: 1px solid #989898;
    background-color: #ffc182;
}

.alert {
    color: white !important;
    padding: 12px !important;
    margin-bottom: 10px !important;
    background-color: #f44336 !important;
}

.alert.info {background-color: #2196F3 !important;}
.alert.success {background-color: #4CAF50 !important;}
.alert.warning {background-color: #ff9800 !important;}

.closebtn {
    color: white !important;
    float: right !important;
    cursor: pointer !important;
    font-size: 22px !important;
    transition: 0.3s !important;
    font-weight: bold !important;
    line-height: 20px !important;
    margin-left: 15px !important;
}

.closebtn:hover {
    color: black !important;
}

textarea:focus {
    outline: none;
}

.col-xs-2 {
    padding-left: 0px !important;
    margin-left: -10px !important;
}

#mv-right {
    margin-left: 10px;
}

#info-box {
    display: none;
    padding: 10px;
    background-color: #e6e6e6;
}

#flush-btn {
    margin-right: 15px;
}

.jumbotron p {
    font-size: 15px !important;
}

.jumbotron {
    padding-right: 30px !important;
    padding-left: 30px !important;
    padding-top: 38px !important;
    padding-bottom: 18px !important;
}

.scrollable-pre {
    height: auto;
    max-height: 200px;
    overflow: auto;
}

.scrollable-pre-long {
    height: auto;
    max-height: 400px;
    overflow: auto;
}

html {
  background: lightgrey;
  height: 100%;
  overflow: hidden;
}

body {
  height: 100%;
  background: whitesmoke;
  overflow: scroll;
}

::-webkit-scrollbar {
    width: 0.3em;
    height: 0.3em;
}

::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}

::-webkit-scrollbar-thumb {
  background-color: #848484;
  outline: 1px solid #848484;
}

::-moz-scrollbar {
    width: 0.3em;
    height: 0.3em;
}
::-moz-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
::-moz-scrollbar-thumb {
  background-color: #848484;
  outline: 1px solid #848484;
}

.modalDialog {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0,0,0,0.8);
    z-index: 99999;
    opacity:0;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    pointer-events: none;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    -webkit-animation-name: fadeIn;
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4s
}

.modalDialog:target {
    opacity:1;
    pointer-events: auto;
}

.modalDialog > div {
    position: fixed;
    bottom: 0;
    background-color: transparent;
    width: 100%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s
}

.close {
    float: right;
    font-size: 21px;
    font-weight: 700;
    line-height: 1;
    color: #FFF !important;
    text-shadow: none !important;
    opacity: 1 !important;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5c78b8;
    color: white;
}

.txtarea-modal {
    padding: 10px;
    width: 100%;
    height: 500px;
    border: 0px;
    resize: none;
}

.txtarea-modal:focus {
    outline: none !important;
}

pre span.N {color:#23AB12} /* Numbers */
pre span.S {color:#CC9385} /* Strings */
pre span.C {color:#7F9F7F} /* Comments */
pre span.K {color:#D81717} /* Keywords */
pre span.V {color:#2F65B7} /* Vars */
pre span.D {color:#FFFFFF} /* Defines */
pre span.P {color:#9F9D65} /* Punctuations */

.disabled-option {
    font-weight: bold;
}

.username-bottom {
    display: block;
    width: 100px;
    height: 30px;
    text-align: center;
    color: white;
    background-color: #c7c7c7;
    padding: 5px;
}

#search-btn-inode{
    margin-top: 10px;
}

.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #636363 !important;
    background-color: #efefef !important;
    border-left: 3px solid gray;
    border-bottom-left-radius: 0px;
    border-top-left-radius: 0px;
}

a {
    color: #696969 !important;
}

.btn-primary {
    color: #fff;
    background-color: #a0a0a0 !important;
    border-color: #a7a7a7 !important;
}

.footer p {
    width: 84.7%;
    font-size: 12px;
    text-align: right;
    color: #c7c7c7;
}

</style>

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".11").click(function() {
                $(".11-info").toggle()
            })
        }), $(document).ready(function() {
            $(".12").click(function() {
                $(".12-info").toggle()
            })
        }), $(document).ready(function() {
            $(".13").click(function() {
                $(".13-info").toggle()
            })
        }), $(document).ready(function() {
            $(".14").click(function() {
                $(".14-info").toggle()
            })
        }), $(document).ready(function() {
            $(".15").click(function() {
                $(".15-info").toggle()
            })
        }), $(document).ready(function() {
            $(".16").click(function() {
                $(".16-info").toggle()
            })
        }), $(document).ready(function() {
            $(".17").click(function() {
                $(".17-info").toggle()
            })
        }), $(document).ready(function() {
            $(".18").click(function() {
                $(".18-info").toggle()
            })
        }), $(document).ready(function() {
            $(".19").click(function() {
                $(".19-info").toggle()
            })
        }), $(document).ready(function() {
            $(".20").click(function() {
                $(".20-info").toggle()
            })
        }), $(document).ready(function() {
            $(".21").click(function() {
                $(".21-info").toggle()
            })
        }), $(document).ready(function() {
            $(".22").click(function() {
                $(".22-info").toggle()
            })
        }), $(document).ready(function() {
            $(".23").click(function() {
                $(".23-info").toggle()
            })
        });
    </script>

    <script type="text/javascript">

    /* Used for pill menu navigation. Fixes the data-toggle attribute behaviour.
    Adds anchor tag (#) to each menu section for reference and quick navigation. */

        $(function(){
          var hash = window.location.hash;
          hash && $('ul.nav a[href="' + hash + '"]').tab('show');

          $('.nav-pills a').click(function (e) {
            $(this).tab('show');
            var scrollmem = $('body').scrollTop() || $('html').scrollTop();
            window.location.hash = this.hash;
            $('html,body').scrollTop(scrollmem);
          });
        });

        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function(){
                var div = this.parentElement;
                div.style.opacity = "0";
                setTimeout(function(){ div.style.display = "none"; }, 600);
            }
        }
    </script>

</head>

<body>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">

        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo basename($_SERVER['PHP_SELF']); ?>">
                <img src='data:image/png;base64,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gaZpKoQQFgoFae/efU7OmTPnOQDhS5WXe/35Ty9/b8LEiSvH3Hzza+GIluzzeio3b9788IoVK2Y/sHjxP3cvK/swoulpiQR9r0dt27lr17989umndy1e8uATJcVFxwCYa9ete3TDunUjH/7GI38sLCw4EtF0LyFE8KhK+IMPPnjsxMmTJQ899PBPszIz9u3es3fBp5/89d4Hly79adfCwuUurzCUEHSiLqCGt2zZ+sM1q1c9sOTBpb/q2rXwiGU7aZZlJT//3LOPd+tWdGzevLn/pumG36MqLWvXrluyffvWCUuWLP1FXl6X04xzr2VZge3bt885c/r0QE3TfACHpumkoLDw8m233f6ULInhlta2nOefe/Ynffr03TNr1szfAyDVNTX9XnrhhX8eO27cmnHjxr0YDIVzX37pxT+mpabW3btw0WO2bUuxLLDo1luwOefsjddf+08jCqiPelSlcuu2bY98+skn0x96+OEXSktK9rpq98TrUds++fSTfzp44GD3hx56+Cc5Odl7Kyp23//pp5/ced99C5/r0aP7Jt0wA6oit3/w4Yc/uXD+fN+Hv/HID7xeb7NACd+6bduCzz/9dKooihg0ZMjhUaNG/z4rM+NQOKIlu1FtKw5QG5ctW/5yRcWusQ9/45FvdsnNqXJ3A9TdLjccP35i/Cuv/Pm7t86d+9nIESPeDEe0LgCoz+tp3rWrYt5HH304a9H99/+pV8+enzQ1twx87tlnfj5k6NBtU6dMeTai6alej9qwf/+Bu955562599678I1+/fquAYB9+/bP+PDD9++855773urVq+cmTTeSPaoSXr58+ZL9+/cPSkpKckzTFFxRHm5ZFgmFQrjn3nuf6l5WtramtnbAC88/94tx4yZsHDdu7B/CES3X5/U0Hz16bObbb791710L7n6lb5/eGwDYe/ftn/3B++/ddc+99/6hT+/eH7q85RiQxs4bJ/bH5/LHJrsgCDOpIH32Bcega4ESQuH1+qEqImqqK7F75zYc3LsHhuOgS9ci+P1JaKhrwNmzZ1FfX4tLFy+iS14e/vjsH3HuxFlwUOR0yUNrsAUZ2WnwenxoqG9A3979UViQh+bmRpfEnXJVWiaP+XgZBycxkUXX186BZF8yKvbsxpkzZ3H3XXfhyPHjAIA+PXvCME28/PKf4Ng28vPzkJycDJ8/cCXT6SvMqY2pA+iRyNMA/3ZiQMowDKSnp6Nvv/5xfNfrWqgqAC8HkgiQ5FGVCCHE41quyvIVK3++Yd3a4d945JtPlpQUb3nvvfd/d/jwofJvfvPRx3Jzc/baDssWBdpiWrZPlkRjz569d7326iv3PrB4yV8GDrzpHQBKKBTOfvqpp54qKS05f/vtt/8bgOClyso+f/7Tn344ZuzYlRPGj382oulJXo96ecOGjd9bs2bVnAceWPLdsrLSj9wJd1WAy+tRG3buqvjFp5/89YHFS5b8rLSk5AAAsnPnrtvfe+/de++++573Bg8e9GfTdrrJotAeiUTSn3rqqafS09Pr739g8WOiQOsrdu+57bNPP1mycNH9Py8rLXnXBdRIJwEf1etR2zdv2fLj1atWPXT/A4t/UVpSvNN2WIqu6+kvvvD80/kFBcfuuP32n+iG6VcVuW31mjXf2bFj+8QlS5b+ND+vy87jJ07OfunFF749a9asjePHj3/etbbx7LPPvirLcmjhovt/JktisKW1LeeF5559vFfv3jtmz579GxdQB7z0wgu/HDN23Irx48e9YDvM99prr/62vq6u4NFHH30wKSmpymE8SaCkxbRsDyFEcRhz3nj9tWdMw8hZvOTBpR5Vqd67d9/tb77x+v133HnnZyNGjHjRsp18SRTaDdP0PfvMMy8qihJcvOTB76uKXFdRsfvOD95/7577Fi56pW/fPh+4acf6a6+//sfmpqb8B5c+9D1VVYOEwBIFIeIuPrWnTp2e9uKLL/x0zJixn86ePesHEU3PTADUhtWrV/9q9erVdy158MFf9iwv/6vlsJ6SQIO2bYuiKIqVl6uKXn7pxd/17t3n1B133P4YBzJ4tDBkw8cff/zr/fv393r4G4/8OK9L7sGm5pbezz/37O8GDLhp24wZtzyh6UaSR1Ua9uzd+8D77757xz33LXy+X98+KwFg9549t334wQf3Ll6y5OnuZWWrHYdlCgI1NmzYuHj58mUTvvXtb/9b18LCFQC6uffbBkDTDbOLoshtNdW1XV988fl/v/nmMRsnTpzw64im53g9asPhI0fv+Ms7by++a8HdT/ft03sNAGv3nj13v//uu/c+sGTJL3qWl79l247XME24hSzDCTzULw+oJ0+dgiRKiCqMOzEptsFtbcHdsaAUISICfi8kSUBN5XlU7NyGQ4cPgDEB+QVF8CYloa62FmfPnUNNTS3aW1vAuQV/kg95efno328ghgwZgS65OfAF/GCMwLZMRLQwqutqYMNB99IyiISgqakZaWlp8Pv98Hp9SE/PgM/n67Dq4i3AjpKGLiDJsgzTNHH48GHk5+WhIL8AAPDOO+/gyJEjKC0tRSAQQHJyCrxev8vO+Ooj/NEqAgyUkn8QReGPideIAmoGepSXX1WS+xo+VCku9VQCoD7/3LMfXbhwvm9ZWXctHA6LNTU10uTJU9ZMnTrlj7bDVEKI8dmnn/zLxo0bR6Snp8Pr9aKy8hL69u13/IHFS75nWXbgrTffeOLEiePdiktKIlokojDGrNbWFrWsrPuxhQsX/guAlnPnz4/89yef+O3UadM/nD1r1r9GND3D61HPL1u27PGPP/7wju9//7FHevXq+aZbNO0qhoDXo17etHnzE2+89tq3v/f9Hzzau3evHRFN7+L1qK2HDh9Z8O47bz/KOEdhYSFraWmhTU1NmDBh4tZbbrnlN5ZtU1kSqzZt2rzwnbff+t4/fO/7/9CzvMfrbpDCiIvMd8gmeD1q08qVK3/z0Ucffvt73//BP/YsL19mM56ma1r67x7/zacFhV33P/TQ0gcN00pRZKnlo48++uWG9etn/uM//fN3uxYW7LIdnvPJxx/9nx07tw8oKirWGGOiYRi2YRiepKTkyoe/8cgPZElobW5pzf/tr3/1534DBmy69957fwCAVF6uGvZvv3386SlTp304a9bM3zOOZNM0lffff+/xPbt3l+dk50CURFRWVmL48OG777777m/bjCv/8e9PvmcaZtYPHntsriAItiQKkRMnT814+603f2CZJgq7dmWtra20oaEBY8eN2z5r5qzHnWgwhkqS5Hz617/+dNOmDYOzsnPgOA7S09OrREFktbU1+d/9/g+WBPy+I5s2bfr2e++9e19paZnl8XjNixcv+HJzc+vuvufehenpaRe0uPRMAAKlVFQVuX39+g3/uuzzzxb4/D6kp2XgclUlcnO7ND2weMn3UlOST9TW1Q99+603n6iquuwpKCjk4ByXKitJWVn3+gULFvwwJSX5Egfspqamro//+tevDR4yZM2CBQv+STfMNFWRq7dv3/G9F194/qFvfutbvxs6ZMh7jCPQ1taW98brrz5dU1ObKksSiktK9ixctOgnBBB279lz7wfvv79AliR0KyoKGbouXbx0UckvKDi3dOnDj6qK3HDxUmWf3/32N6/ecsuMZTNnzvxeRNMLvB61et/+/Yuff/aZx5Y+9I1/HTJk8MeMI6m9vT39tVdfeaG2tjaDUorynj033XfvvXN0w/THcZr1GwbUN158CobDkJmTi5LS7uiSVwBCaPbly7UXTFNT66ovYfeOrTh2/BioJKFLXjE8Ph+qa6tx9sw51NXWIBRsA8CRnJyEzMwsFBQWoVev3ujdqw+yc3JBCKAbOq7kAXA3lElhGDragm2oq6+DA45uXQuRl5MDSVXg2AzMcUApgSjKkGUZgiBCkqKFtgRBANxiYrGkpvS0dFBCsHXnDqxZvQa2aaCwoBA+nw9erw/JyclQ1Wsq5H9FLtQoUKenp073+TwrbfuL17JtG7ld8uDz+a/HQaUJUX6Vc+5TVUUXKG1zM2MkAIphWtm2bUuEEMY5FyRJ0mRJrI3fGlu2k22apheAoCiyLgpCs9s2Z4ynU0qCjDGm6UYKB0xREDRVkS85jpOiG2YyIURnjEuqIteLotBgmGaWZTsSjVJOrqJbMcZVWRbbZUlqMy272LQsH42SxmVKqayqSguJ+qskd0J7DNNKt6Nlu3XOOVFkuUkUhUuGYWbbjiMTQkLovHKqwDj3qbIcEkWh1TDNrpbteAkIIwTU61ErOYdH0/VsABbnXFEVpVUQaJtumF1d0WJJliUmiWJrjOfKGE+NshGgRTQ9nXNuU0ptj6qcZ4z7NN1IBzgTKLVUVbnsOCxLN4x0QojNOZdkWdYlUah327MAUNOyM12le+71qFUAnIimd41xdgmlskdRWglBm/vuLff9Ztm2TdwSyuCcy7Is2ZIoNsa63LKdLIAbkii2RjQ9jzFGJEkyFFmqd9shADSHsSRdNz2EdGSSXcWV5ZyroihSRZYa4hZ22A7LMgzD5wrGSKoihwVKm9z/j9IQHCfTLUGuc84dt78uMsaTNd1IJwQGY1yWZTEoS1KdZdkFhml5abSMt6wqSjulJAiAOYz5dd3MjRJMKPGoSiOujBkbgOMwlqLrhsI5tyRJshRZumDbdopuWBmUEoNxrkiiGFJkqday7QLD6LiWqKpKE42K4kQch8m6YWS65c+v4m3fEKC+9/rLMB0G1edDwO9DU23thCNHj/769PmzwyVJRZf8bpAUGbU1tTh77jzq66sQDLaDgiI5kIT0jEx0yStAcUkJevTogaKiEqiqpyPH/Hqsq5iEXTRXO4JQKIz2UAgtTU1g4EhJSUJ2dhbS0tORFEiC6olmTomi3OFftW0b7e3tqKqqxvkL53D+XLSKa1ZmJvxeH7w+HzweD5KSktw8bYL/iYp+hBDIstyHc3408f9iVTDLe5bD4/F8GVI/TeCfSgk8PnqNh0rk45GEdjtL9IonZfNrEKURR1exE67BE0jc8WTxRP5hZ4fTCTHfTsi06mzhSeSNJnJZkUAyFzvhRorX6JfOyO2JyQ70Gu+NdNJWZ3zYxAQLXIPYzxIWW3INIQ2W8LyJvFU7gePZGUdUSOC1JvZ5ZxzlxASEzp6bdJJEgeuMC6GT5+iMm4tOrkcSnoF3wld14voj8eQ3BKhvvfzs9KMnTjxxqfJib0IV5OQXQJRlVF++jHPnzqO+vgFtrc0AGNJSU1HQtRu6ditCUbdidCsuQZfcLlAVGYZhXi+48qUAKKqqb0PToqU8TFODYRgwdAMRLQJDN2DbNhzuuPuTKCVKVT1QFQWyLEOSJUiiBEX1QFW98HgUxIRJ/qcqEDiOA49Hqc/JySkBEOrsurZtIzMzC8kpKX+r30gn2UnxE5hc53v4L6wenRHK+TUm+LXqLiVev7OTXuPa17o+v8b1OrtGZ/2QCF7XWmTIl+gTXCMR4XrP3dmzkGskM5BO/o//DSL79d4nrnH9zsCdJvRFZ89wveux67yv62U3dfY3cp3PdpZokngf15sL5Dr9clXf3BCx/4f/8k/fCYe1P7S1BXHu7Fk0Ntajvq4WlqGjsKgr+g8cgP59BqKgoCtS01Lh9fpBKYVpmh2WVXzQJWZ13sj2OPHzhHSoBcBxHFiWDcex4ObbgjlRIRNCotxWQaAQRQmSJEIQoicIAXcJ+9e6xpcp8XGjIExcsAwEfBvT0tLGX8+1YNs28gsKkZyc/N9ajL4+vj6+Pv5+xw0BKuccP/zhPz/+u9/92w9HjRpa1b//Tb8fNHjQ72fMmOWpvFR9qq01mE8Ih21bYB3+St6RyBwNFMXVhOHokPy76meUngld19xATCwZmsd8buCcdbQd/XfseywhgERcNad4FSzqKk1dqXXEOYfH40GU/sWu+k7s9/h/x//9anAnILTzzwIAJYQh6ke0Oec+QRAO5OZmT5YkqfF6lCzGGERRRHZOLmJVQ78+vj6+Pv7fBdT/bwDAhKg7wKcwswAAAABJRU5ErkJggg==' style='width:230px;margin-left:20px'>
            </a>
        </div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">            
    <ul class="nav navbar-nav navbar-right">
        <form method="POST">
            <li><button type="submit" name="flushsessions" id="flush-btn" style="margin-top:12px;" class="btn btn-primary">Flush the current session</button></li>
        </form>
    </ul>
</div>

<?php

error_reporting(0);

if (isset($_POST['flushsessions'])) {
    session_destroy();
    echo '<div class="alert success" style="text-align:center;"><span class="closebtn">&times;</span>The active session has been flushed successfully!</div>';
}

class SyntaxHighlight {
    public static function process($s) {
        $s = htmlspecialchars($s);

        // Workaround for escaped backslashes
        $s = str_replace('\\\\','\\\\<e>', $s); 

        $regexp = array(

            // Comments/Strings
            '/(
                \/\*.*?\*\/|
                \/\/.*?\n|
                \#.[^a-fA-F0-9]+?\n|
                \&lt;\!\-\-[\s\S]+\-\-\&gt;|
                (?<!\\\)&quot;.*?(?<!\\\)&quot;|
                (?<!\\\)\'(.*?)(?<!\\\)\'
            )/isex' 
            => 'self::replaceId($tokens,\'$1\')',

            // Punctuations
            '/([\-\!\%\^\*\(\)\+\|\~\=\`\{\}\[\]\:\"\'<>\?\,\.\/]+)/'
            => '<span class="P">$1</span>',

            // Numbers (also look for Hex)
            '/(?<!\w)(
                (0x|\#)[\da-f]+|
                \d+|
                \d+(px|em|cm|mm|rem|s|\%)
            )(?!\w)/ix'
            => '<span class="N">$1</span>',

            // Make the bold assumption that an
            // all uppercase word has a special meaning
            '/(?<!\w|>|\#)(
                [A-Z_0-9]{2,}
            )(?!\w)/x'
            => '<span class="D">$1</span>',

            // Keywords
            '/(?<!\w|\$|\%|\@|>)(
                and|or|xor|for|do|while|foreach|as|return|die|exit|if|then|else|
                elseif|new|delete|try|throw|catch|finally|class|function|string|
                array|object|resource|var|bool|boolean|int|integer|float|double|
                real|string|array|global|const|static|public|private|protected|
                published|extends|switch|true|false|null|void|this|self|struct|
                char|signed|unsigned|short|long
            )(?!\w|=")/ix'
            => '<span class="K">$1</span>',

            // PHP/Perl-Style Vars: $var, %var, @var
            '/(?<!\w)(
                (\$|\%|\@)(\-&gt;|\w)+
            )(?!\w)/ix'
            => '<span class="V">$1</span>'

        );

        $tokens = array(); // This array will be filled from the regexp-callback

        $s = preg_replace(array_keys($regexp), array_values($regexp), $s);

        // Paste the comments and strings back in again
        $s = str_replace(array_keys($tokens), array_values($tokens), $s);

        // Delete the "Escaped Backslash Workaround Token" (TM)
        // and replace tabs with four spaces.
        $s = str_replace(array('<e>', "\t"), array('', '    '), $s);

        return '<pre style="height:450px"><code>' . $s . '</code></pre>';
    }

    // Regexp-Callback to replace every comment or string with a uniqid and save
    // the matched text in an array
    // This way, strings and comments will be stripped out and wont be processed
    // by the other expressions searching for keywords etc.
    private static function replaceId(&$a, $match) {
        $id = "##r" . uniqid() . "##";

        // String or Comment?
        if(substr($match, 0, 2) == '//' || substr($match, 0, 2) == '/*' || substr($match, 0, 2) == '##' || substr($match, 0, 7) == '&lt;!--') {
            $a[$id] = '<span class="C">' . $match . '</span>';
        } else {
            $a[$id] = '<span class="S">' . $match . '</span>';
        }
        return $id;
    }
}

// Fixing the issue with opening certain shell files

function file_get_contents_utf8($fn) {
     $content = file_get_contents($fn);
      return mb_convert_encoding($content, 'UTF-8',
          mb_detect_encoding($content, 'UTF-8, ISO-8859-1', true));
}

?>

    </div><!-- /.container-fluid -->
</nav>

    <br />
    <div class="container-fluid main-container">
        <div class="col-md-2 sidebar">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#help"><span class="glyphicon glyphicon-home"></span>&#160; Help page</a></li>
                <li><hr /></li>
                <li><a href="#runclamav">1.1. <span class="glyphicon glyphicon-barcode"></span>&#160; Scan with ClamAV</a></li>
                <li><a href="#readclamav">1.2. <span class="glyphicon glyphicon-eye-open"></span>&#160; Read ClamAV log file</a></li>
                <li><a href="#alogscan">1.3. <span class="glyphicon glyphicon-search"></span>&#160; Access log scanner</a></li>
                <li><a href="#flogscan">1.4. <span class="glyphicon glyphicon-search"></span>&#160; FTP log scanner</a></li>
                <li><a href="#clogscan">1.5. <span class="glyphicon glyphicon-search"></span>&#160; cPanel log scanner</a></li>
                <li><a href="#searcharchives">1.6. <span class="glyphicon glyphicon-folder-open"></span>&#160; Find extracted files</a></li>
                <li><a href="#inodechange">1.7. <span class="glyphicon glyphicon-file"></span>&#160; Last file inode changes</a></li>
                <li><a href="#deobftools">1.8. <span class="glyphicon glyphicon-compressed"></span>&#160; Deobfuscation tools</a></li>
                <li><a href="#sigrepos">1.9. <span class="glyphicon glyphicon-list-alt"></span>&#160; Signature repositories</a></li>
                <li><a href="#scanmalware">2.0. <span class="glyphicon glyphicon-globe"></span>&#160; Scan malware online</a></li>
                <li><a href="#searchclamavlog">2.1. <span class="glyphicon glyphicon-screenshot"></span>&#160; Search for log files</a></li>
                <li><hr></li>
                <li><a href="#misc"><span class="glyphicon glyphicon-wrench"></span>&#160; Miscellaneous</a></li>
            </ul>
        </div>
        <div class="col-md-10 content">

                    <div class="tab-content col-md-10">

<!--
┌ - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -┐
|                                                                                                                                                                              |
|                                                                                                                                                                              |
|                                                                             1.0. HELP PAGE MENU                                                                              |
|                                                                                                                                                                              |
|______________________________________________________________________________________________________________________________________________________________________________|
████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████
-->

                            <div class="tab-pane active" id="help">
                              <div class="panel panel-default">
                                <div class="panel-heading">Help panel</div>
                                <div class="panel-body">

                            <div class="jumbotron">
                              <img src='data:image/png;base64,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gaZpKoQQFgoFae/efU7OmTPnOQDhS5WXe/35Ty9/b8LEiSvH3Hzza+GIluzzeio3b9788IoVK2Y/sHjxP3cvK/swoulpiQR9r0dt27lr17989umndy1e8uATJcVFxwCYa9ete3TDunUjH/7GI38sLCw4EtF0LyFE8KhK+IMPPnjsxMmTJQ899PBPszIz9u3es3fBp5/89d4Hly79adfCwuUurzCUEHSiLqCGt2zZ+sM1q1c9sOTBpb/q2rXwiGU7aZZlJT//3LOPd+tWdGzevLn/pumG36MqLWvXrluyffvWCUuWLP1FXl6X04xzr2VZge3bt885c/r0QE3TfACHpumkoLDw8m233f6ULInhlta2nOefe/Ynffr03TNr1szfAyDVNTX9XnrhhX8eO27cmnHjxr0YDIVzX37pxT+mpabW3btw0WO2bUuxLLDo1luwOefsjddf+08jCqiPelSlcuu2bY98+skn0x96+OEXSktK9rpq98TrUds++fSTfzp44GD3hx56+Cc5Odl7Kyp23//pp5/ced99C5/r0aP7Jt0wA6oit3/w4Yc/uXD+fN+Hv/HID7xeb7NACd+6bduCzz/9dKooihg0ZMjhUaNG/z4rM+NQOKIlu1FtKw5QG5ctW/5yRcWusQ9/45FvdsnNqXJ3A9TdLjccP35i/Cuv/Pm7t86d+9nIESPeDEe0LgCoz+tp3rWrYt5HH304a9H99/+pV8+enzQ1twx87tlnfj5k6NBtU6dMeTai6alej9qwf/+Bu955562599678I1+/fquAYB9+/bP+PDD9++855773urVq+cmTTeSPaoSXr58+ZL9+/cPSkpKckzTFFxRHm5ZFgmFQrjn3nuf6l5WtramtnbAC88/94tx4yZsHDdu7B/CES3X5/U0Hz16bObbb791710L7n6lb5/eGwDYe/ftn/3B++/ddc+99/6hT+/eH7q85RiQxs4bJ/bH5/LHJrsgCDOpIH32Bcega4ESQuH1+qEqImqqK7F75zYc3LsHhuOgS9ci+P1JaKhrwNmzZ1FfX4tLFy+iS14e/vjsH3HuxFlwUOR0yUNrsAUZ2WnwenxoqG9A3979UViQh+bmRpfEnXJVWiaP+XgZBycxkUXX186BZF8yKvbsxpkzZ3H3XXfhyPHjAIA+PXvCME28/PKf4Ng28vPzkJycDJ8/cCXT6SvMqY2pA+iRyNMA/3ZiQMowDKSnp6Nvv/5xfNfrWqgqAC8HkgiQ5FGVCCHE41quyvIVK3++Yd3a4d945JtPlpQUb3nvvfd/d/jwofJvfvPRx3Jzc/baDssWBdpiWrZPlkRjz569d7326iv3PrB4yV8GDrzpHQBKKBTOfvqpp54qKS05f/vtt/8bgOClyso+f/7Tn344ZuzYlRPGj382oulJXo96ecOGjd9bs2bVnAceWPLdsrLSj9wJd1WAy+tRG3buqvjFp5/89YHFS5b8rLSk5AAAsnPnrtvfe+/de++++573Bg8e9GfTdrrJotAeiUTSn3rqqafS09Pr739g8WOiQOsrdu+57bNPP1mycNH9Py8rLXnXBdRIJwEf1etR2zdv2fLj1atWPXT/A4t/UVpSvNN2WIqu6+kvvvD80/kFBcfuuP32n+iG6VcVuW31mjXf2bFj+8QlS5b+ND+vy87jJ07OfunFF749a9asjePHj3/etbbx7LPPvirLcmjhovt/JktisKW1LeeF5559vFfv3jtmz579GxdQB7z0wgu/HDN23Irx48e9YDvM99prr/62vq6u4NFHH30wKSmpymE8SaCkxbRsDyFEcRhz3nj9tWdMw8hZvOTBpR5Vqd67d9/tb77x+v133HnnZyNGjHjRsp18SRTaDdP0PfvMMy8qihJcvOTB76uKXFdRsfvOD95/7577Fi56pW/fPh+4acf6a6+//sfmpqb8B5c+9D1VVYOEwBIFIeIuPrWnTp2e9uKLL/x0zJixn86ePesHEU3PTADUhtWrV/9q9erVdy158MFf9iwv/6vlsJ6SQIO2bYuiKIqVl6uKXn7pxd/17t3n1B133P4YBzJ4tDBkw8cff/zr/fv393r4G4/8OK9L7sGm5pbezz/37O8GDLhp24wZtzyh6UaSR1Ua9uzd+8D77757xz33LXy+X98+KwFg9549t334wQf3Ll6y5OnuZWWrHYdlCgI1NmzYuHj58mUTvvXtb/9b18LCFQC6uffbBkDTDbOLoshtNdW1XV988fl/v/nmMRsnTpzw64im53g9asPhI0fv+Ms7by++a8HdT/ft03sNAGv3nj13v//uu/c+sGTJL3qWl79l247XME24hSzDCTzULw+oJ0+dgiRKiCqMOzEptsFtbcHdsaAUISICfi8kSUBN5XlU7NyGQ4cPgDEB+QVF8CYloa62FmfPnUNNTS3aW1vAuQV/kg95efno328ghgwZgS65OfAF/GCMwLZMRLQwqutqYMNB99IyiISgqakZaWlp8Pv98Hp9SE/PgM/n67Dq4i3AjpKGLiDJsgzTNHH48GHk5+WhIL8AAPDOO+/gyJEjKC0tRSAQQHJyCrxev8vO+Ooj/NEqAgyUkn8QReGPideIAmoGepSXX1WS+xo+VCku9VQCoD7/3LMfXbhwvm9ZWXctHA6LNTU10uTJU9ZMnTrlj7bDVEKI8dmnn/zLxo0bR6Snp8Pr9aKy8hL69u13/IHFS75nWXbgrTffeOLEiePdiktKIlokojDGrNbWFrWsrPuxhQsX/guAlnPnz4/89yef+O3UadM/nD1r1r9GND3D61HPL1u27PGPP/7wju9//7FHevXq+aZbNO0qhoDXo17etHnzE2+89tq3v/f9Hzzau3evHRFN7+L1qK2HDh9Z8O47bz/KOEdhYSFraWmhTU1NmDBh4tZbbrnlN5ZtU1kSqzZt2rzwnbff+t4/fO/7/9CzvMfrbpDCiIvMd8gmeD1q08qVK3/z0Ucffvt73//BP/YsL19mM56ma1r67x7/zacFhV33P/TQ0gcN00pRZKnlo48++uWG9etn/uM//fN3uxYW7LIdnvPJxx/9nx07tw8oKirWGGOiYRi2YRiepKTkyoe/8cgPZElobW5pzf/tr3/1534DBmy69957fwCAVF6uGvZvv3386SlTp304a9bM3zOOZNM0lffff+/xPbt3l+dk50CURFRWVmL48OG777777m/bjCv/8e9PvmcaZtYPHntsriAItiQKkRMnT814+603f2CZJgq7dmWtra20oaEBY8eN2z5r5qzHnWgwhkqS5Hz617/+dNOmDYOzsnPgOA7S09OrREFktbU1+d/9/g+WBPy+I5s2bfr2e++9e19paZnl8XjNixcv+HJzc+vuvufehenpaRe0uPRMAAKlVFQVuX39+g3/uuzzzxb4/D6kp2XgclUlcnO7ND2weMn3UlOST9TW1Q99+603n6iquuwpKCjk4ByXKitJWVn3+gULFvwwJSX5Egfspqamro//+tevDR4yZM2CBQv+STfMNFWRq7dv3/G9F194/qFvfutbvxs6ZMh7jCPQ1taW98brrz5dU1ObKksSiktK9ixctOgnBBB279lz7wfvv79AliR0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' style='width:340px'><br /><br />
                              <p>SH scanner is a potentially malicious content analysis tool that provides the ability to easily and quickly detect how malicious files were located in your account. The tool is written and suited for shared hosting environments running cPanel. The tool requires ClamAV to be installed on the server. Currently SH scanner supports the following features:</p>
                            </div>

                            <ul>
                                <li id="more-m1"><b>Scan with ClamAV</b> - <a class="11" href='#more-m1'>More information</a></li>
                                <p><i>- Initiates a clamscan with additional options for a specified directory;</i></p>

<p class="11-info" id="info-box">When starting ClamAV, in most cases PHP will not wait for its execution to finish and Internal Server Error 500 will return due to the maximum value of FcgidIOTimeout. For this purpose, this menu allows ClamAV to run in background, so we have a refresh button to understand when it's finished. This button actually asks if a "clamscan" process is still running. If any, it will show that ClamAV has not yet completed its implementation. If none exists, it will show that ClamAV has completed its execution. The results of the tmp file that is created and where the ClamAV logo is stored is automatically deleted when ClamAV completes its execution. The contents of this file are copied and returned to the PHP file in the appropriate menu.<br /><br />The second option to list decoded signatures performs a bash script that takes the signature name, searches for it in <b>/var/lib/clamav</b> and extracts only the hexadecimal value based on a regular expression. Then it decodes it to ASCII and returns its value in readable form.</p>

                                <li id="more-m2"><b>Read ClamAV log file</b> - <a class="12" href='#more-m2'>More information</a></li>
                                <p><i>- Takes the content of a log file that we have generated from ClamAV and lists all files, their ctime and mtime stamps, and the signatures they are found on;</i></p>

<p class="12-info" id="info-box">Executes <b>stat -c '%y'</b> and <b>stat -c '%z'</b>, to find mtime and ctime of all files in our ClamAV log file. It works with a regular expression written specifically for the ClamAV log files and can only work with them. If a file found in the ClamAV log file does not exist, it only returns an error to it. It is possible to specify your own ClamAV log file other than the root directory. By default, it will load the one that is in the root directory: <b>logfile.txt</b></p>

                                <li id="more-m3"><b>Access log scanner</b> - <a class="13" href='#more-m3'>More information</a></li>
                                <p><i>- It shows all hits to the website 10 seconds back and forth from the ctime of the files in our ClamAV log file;</i></p>

<p class="13-info" id="info-box">With a log file provided on our side (the specified path to one on the account), the script takes ctime the stamp of each file from the ClamAV log file and searches 10 seconds back and forth for the access log file. Before the search starts, the script generates a list of all ctime file prints (collectively), adding to each +0, +1, +2, +3 ... +10, -1, -2 and -3 ... - 10 seconds. This way, we have all the hits to the site up to 10 seconds back and 10 seconds ahead of the ctime stamp of an allegedly infected file (plus the stamp itself - / + 0 seconds). The format of the stamps is preconfigured so that it can be searched for it in the access log file. In addition, there is a choice of a local log file to access a domain available on the server in the <b>/etc/httpd/domlogs/$ {USER}/</b> directory. This way, the need to manually upload a log file into the account can be avoided in order to be scanned. However, if it is needed for any reason, it can be uploaded and scanned. <br /> <br /> The same menu also provides the opportunity to check if a log file ClamAV for potentially malicious files has been accessed / smashed. The extras in this menu are to check all the hits for the selected domain from a specific IP address and geolocation of IP addresses. This is useful in some cases, as it is entirely possible that only one IP address is the cause of malicious access and so we can easily navigate where everything started (what was first and subsequently captured).</p>

                                <li id="more-m4"><b>FTP log scanner</b> - <a class="14" href='#more-m4'>More information</a></li>
                                <p><i>- Shows all FTP requests 10 seconds back and forth from the ctime timestamp;</i></p>

<p class="14-info" id="info-box">When scanning the FTP account log (<b>/usr/local/apache/domlogs/ftp.{$USER_DOMAIN}-ftp_log</b>), the script takes the ctime stamp of each file from a ClamAV log file, 10 seconds back and forth in the FTP log file. Before the search starts, the script generates a list of all ctime file prints (collectively), adding to each +0, +1, +2, +3 ... +10, -1, -2 and -3 ... - 10 seconds. This way, we have all FTP queries for the specific user up to 10 seconds back and 10 seconds ahead of the ctime stamp of a supposedly infected file. The format of the stamps is preconfigured so that it can be searched for in the FTP log file. <br /> <br /> The second option of the script allows us to search by the same criteria but in the archived FTP logs in the account (<b>/home/<?php echo getUser(); ?>/logs</b>).</p>

                                <li id="more-m5"><b>cPanel log scanner</b> - <a class="15" href='#more-m5'>More information</a></li>
                                <p><i>- Shows all requests from the cPanel access log 10 seconds back and forth from the ctime timestamp;</i></p>

<p class="15-info" id="info-box">With a specified log file (the specified path to one on the account), the script takes the ctime of each ClamAV log file and searches 10 seconds back and forth for the cPanel log file. Before the search starts, the script generates a list of all ctime file prints (collectively), adding to each +0, +1, +2, +3 ... +10, -1, -2 and -3 ... - 10 seconds. In this way, we have all cPanel requests for the specific user, up to 10 seconds back and 10 seconds ahead of the ctime stamp of a supposedly infected file. The format of the stamps is preconfigured so that it can be searched for in the cPanel log file.</p>

                                <li id="more-m6"><b>Find extracted files</b> - <a class="16" href='#more-m6'>More information</a></li>
                                <p><i>- Shows us all the archive available in the account and looks into their content for files saved in a ClamAV log file;</i></p>

<p class="16-info" id="info-box">Has to basic functionalities:<br /><br />- Detect all compressed files (archives) in your account. Search for the following extensions and return a list of files / archives: <b>.zip</b>, <b>.tar.gz</b>, <b>.tar</b>, <b>.7zip</b>, <b>.rar</b>, <b>.bz2</b>, <b>.gz</b>, <b>.7z</b>, <b>.tgz</b> and <b>.tar.bz2</b>. Along with each file / archive, it returns its ctime print so that we can orient when it was uploaded (eventually). You may be able to search for archives only in a specific directory or in the entire account. If necessary, it is possible to search for archives with specific extensions. <br /> <br /> - An option to check whether a file from a ClamAV log file already loaded / specified is available in one of the archives. It should be borne in mind that this option allows searching for specific files only in archives without being unzipped, with extensions <b>.zip</b>, <b>.tar</b>, <b>.tar.gz</b>, <b>.tar.bz2</b>.</p>

                                <li id="more-m7"><b>Last file inode changes</b> - <a class="17" href='#more-m7'>More information</a></li>
                                <p><i>- Shows us all files in a listed directory whose inode information has been modified in the last [N] days;</i></p>

<p class="17-info" id="info-box">Allows us to check for inode information of files in the account. Such changes occur most often when the account / web site has been compromised. Performs the following command in bash: <b>find public_html/ -type f -ctime -10 -name "*.php" -print0 | xargs -r0 stat -c %z\ %n | sort</b> by default. If a <i> 'directory </i> is set, <i>' time interval '</i> and / or <i>' extension </i> will be searched for. If a field is left blank, the script uses the default value (<b>public_html/, 10 days, .php</b>).</p>

                                <li id="more-m8"><b>Deobfuscation tools</b> - <a class="18" href='#more-m8'>More information</a></li>
                                <p><i>- A list of online tools that can help us read malicious code for the identification of it as such or as false positive;</i></p>

<p class="18-info" id="info-box">They can be used to read malicious or false positive code. At each link of the first link on the page there is an example code of how it looks and which of the balls to use for deobfuscate.</p>

                                <li id="more-m9"><b>Signature repositories</b> - <a class="19" href='#more-m9'>More information</a></li>
                                <p><i>- A list of online signature repositories;</i></p>

<p class="19-info" id="info-box">Includes a list of signatures that are used by ClamAV as external databases. Many of them can not be found locally unless explicitly added because external databases are used. It searches for the name of the database (for example, if we have <b>Sanesecurity.Blurl.a8a9ed</b>, it's searching in database called <b>blurl.ndb</b>). Since the signatures here are also stored in hexadecimal format, it is necessary to copy the string (for example: 5469746c653a4a73705765627368656c6c) and put it in the box below, on the same page, to convert to ASCII. Then we'll be able to see what the real value of the signature is.</p>

                                <li id="more-m20"><b>Scan malware online</b> - <a class="20" href='#more-m20'>More information</a></li>
                                <p><i>- A list of websites that allow for file or URL address scanning;</i></p>

<p class="20-info" id="info-box">It contains a list of online sites where we can scan an additional file for which we are not sure whether it is malicious or not. Sucuri's site only scans a client-side code such as HTML, JavaScript, and more, as Sucuri Scan can not readily access server applications (files).</p>

                                <li id="more-m21"><b>Search for log files</b> - <a class="21" href='#more-m21'>More information</a></li>
                                <p><i>- Check for ClamAV generated log files;</i></p>

<p class="21-info" id="info-box">This page helps us to find all ClamAV log files since it is possible to leave such behind. Runs a precise grep on the following: <b>"-------------------------------------------------------------------------------"</b>, which is the line with which every ClamAV log file starts (empty or not). By default, it searches in the home directory of the current user.</p>

                                <li id="more-m22"><b>Miscellaneous</b> - <a class="22" href='#more-m22'>More information</a></li>
                                <p><i>- Additional functionalities and extras;</i></p>

<p class="22-info" id="info-box">The menu contains useful links and tools that do not fit into other menus. The functionalities of this menu allow us to:<br /><br />

- run stat(1) on an arbitrary file in the account specified by us;<br />
- find all cron jobs for the current user;<br />
- find the last logins via cPanel;<br />
- outputs the SSH history of the current user (<i>this option is not particularly reliable and at this stage can not be relied on its entirely correct functionality</i>);
</p>

                            </ul>

                                </div>
                              </div>
                            </div>

<!--
┌ - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -┐
|                                                                                                                                                                              |
|                                                                                                                                                                              |
|                                                                             1.1. RUN CLAMAV MENU                                                                             |
|                                                                                                                                                                              |
|______________________________________________________________________________________________________________________________________________________________________________|
████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████
-->

                            <div class="tab-pane" id="runclamav">
                              <div class="panel panel-default">
                                <div class="panel-heading">Run ClamAV</div>
                                <div class="panel-body">

                                <form class="form-inline" role="form" action="sh-scanner.php#runclamav" method="POST">
                                <div class="form-group">
                                  <button type="submit" name="run-without" class="btn btn-default">Run ClamAV with default options</button>
                                </div>

                                <div class="form-group">
                                  <input class="form-control" style="width:240px" id="disabledInput" type="text" placeholder="clamscan-sh -ri /home/<?php echo getUser(); ?>" disabled>
                                </div>
                                </form>
                                
                                <?php

                                ini_set("memory_limit","1024M");

                                if (isset($_POST['run-without'])) {

                                   $tmpfname = tempnam("/tmp", "SH-S");
                                   shell_exec('clamscan-sh -ri /home/'. getUser() .' > '. $tmpfname .' &'); // Runs shell_exec() in background ('&');

                                   $_SESSION['tmpfname'] = $tmpfname; // Stores the temporary file in a session so that it can be unlinked later on;

                                   echo '<div class="alert success"><span class="closebtn">&times;</span>ClamAV has been started successfully!</div>';
                                }

                                ?>

                                <form class="form-inline" role="form" action="sh-scanner.php#runclamav" method="POST">
                                    <div class="form-group">
                                      <button type="submit" name="check-and-delete" class="btn btn-info">Check if ClamAV is running and delete the temporary file</button>
                                    </div>
                                </form>

                                <?php

                                if (isset($_POST['check-and-delete'])) {

                                    if (shell_exec("pgrep clamscan") != '') {
                                        echo '<div class="alert warning"><span class="closebtn">&times;</span>ClamAV is still running.</div>';

                                    } else {
                                        echo '<div class="alert success"><span class="closebtn">&times;</span>ClamAV is NOT running. Temporary file has been deleted. Output is given below.</div>';

                                        $tmpfname = $_SESSION['tmpfname']; // Return the name of the temporary file stored in the session;

                                        echo '<pre>'. @file_get_contents($tmpfname) .'</pre>';
                                        @unlink($tmpfname); // Delete temporary file;
                                    }
                                }

                                ?>

                                <hr />
                                <form class="form-inline" role="form" action="sh-scanner.php#runclamav" method="POST">
                                <div class="form-group">
                                  <button type="submit" name="run-with" class="btn btn-default">Run ClamAV with default options + log file generation</button>
                                </div>

                                <div class="form-group">
                                  <input class="form-control" style="width:450px" id="disabledInput" type="text" placeholder="clamscan-sh -ri /home/<?php echo getUser(); ?> --log=/home/<?php echo getUser(); ?>/logfile.txt" disabled>
                                </div>
                                </form>

                                <?php

                                if (isset($_POST['run-with'])) {
                                    echo shell_exec("clamscan-sh -ri /home/". getUser() ." --log=/home/". getUser() ."/logfile.txt > /dev/null 2>/dev/null &");
                                    echo '<div class="alert success"><span class="closebtn">&times;</span>ClamAV has been started successfully!</div>';
                                }

                                ?>
                                <hr />
                                <h4>Decode signatures</h4>
                                <p><i>When clicked, the log files are decoded from the log file in sequential order. It is necessary to indicate the path to the ClamAV log file. If you do not specify one, the results from the following file will be loaded <b>/home/<?php echo getUser(); ?>/logfile.txt</b> by default.</i></p>

                                <form class="form-inline" role="form" action="sh-scanner.php#runclamav" method="POST">
                                  <button type="submit" name="default-sigs" class="btn btn-default">Run a decode on /home/<?php echo getUser(); ?>/logfile.txt</button>
                                </form>

                                <?php

                                if (isset($_POST['default-sigs'])) {
                                    echo '<pre>'. shell_exec('parse=$( awk \'NF > 1 {print $2}\' "/home/'.getUser().'/logfile.txt");Array=($( grep -ra "$parse" /var/lib/clamav | grep -oP "(?<=^|[*{};])[A-Fa-f0-9]+(?=$|[*;{}])"));for hex in "${Array[@]}";do converted="$(xxd -r -p <<< "$hex")";echo -e "$converted";done') .'</pre>';
                                } // Runs the custom bash script for recursive grep in binary and ordinary files with a regex to match and xxd (convert HEX to ASCII) all signatures;

                                ?>

                                <form class="form-inline" role="form" action="sh-scanner.php#runclamav" method="POST">
                                  <button type="submit" name="custom-sigs" class="btn btn-default">Run a decode on...</button>
                                  <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2">/home/<?php echo getUser(); ?>/</span>
                                    <input type="text" class="form-control" style="width:300px" name="custom-sigs-file" value="">
                                  </div>
                                </form>

                                <?php

                                if (isset($_POST['custom-sigs']) && isset($_POST['custom-sigs-file']) && !empty($_POST['custom-sigs-file']) && file_exists('/home/'.getUser().'/'.$_POST['custom-sigs-file'])) {
                                    echo '<pre>'. shell_exec('parse=$( awk \'NF > 1 {print $2}\' "/home/'. getUser(). '/'. $_POST["custom-sigs-file"] .'");Array=($( grep -ra "$parse" /var/lib/clamav | grep -oP "(?<=^|[*{};])[A-Fa-f0-9]+(?=$|[*;{}])"));for hex in "${Array[@]}";do converted="$(xxd -r -p <<< "$hex")";echo -e "$converted";done') .'</pre>';
                                    // Runs the custom bash script for recursive grep in binary and ordinary files with a regex to match and xxd (convert HEX to ASCII) all signatures;
                                } else if (isset($_POST['custom-sigs']) && isset($_POST['custom-sigs-file']) && empty($_POST['custom-sigs-file'])) {
                                    echo '<div class="alert"><span class="closebtn">&times;</span>No log file has been specified.</div>';
                                } else if (isset($_POST['custom-sigs']) && isset($_POST['custom-sigs-file']) && !empty($_POST['custom-sigs-file']) && !file_exists($_POST['custom-sigs-file'])) {
                                    echo '<div class="alert"><span class="closebtn">&times;</span>The specified log file <b>'.$_POST["custom-sigs-file"].'</b> is not found.</div>';
                                }

                                ?>

                                <div class="alert info"><span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>The signatures are only searched in <b>/var/lib/clamav</b>. For a complete list, check <b>1.9. Signature repositories</b>.</div>
                                <div class="alert warning"><span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>Don't forget to delete the log files if you are generating such. For additional information, check <b>2.1. Search for log files</b>.</div>
                                
                                </div>
                              </div>
                            </div>

<!--
┌ - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -┐
|                                                                                                                                                                              |
|                                                                                                                                                                              |
|                                                                        1.2. READ CLAMAV LOG FILE MENU                                                                        |
|                                                                                                                                                                              |
|______________________________________________________________________________________________________________________________________________________________________________|
████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████
-->

                            <div class="tab-pane" id="readclamav">
                              <div class="panel panel-default">
                                <div class="panel-heading">Read ClamAV log file</div>
                                <div class="panel-body">

                                <p><i>If no path is specified, the default one is <u>/home/<?php echo getUser(); ?>/logfile.txt</u></i></p>

                                <form class="form-inline" role="form" action="sh-scanner.php#readclamav" method="POST">
                                  <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2">/home/<?php echo getUser(); ?>/</span>
                                    <input type="text" class="form-control" style="width:400px" name="logfile" value="">
                                  </div>
                                  <button type="submit" class="btn btn-default">Load</button>
                                </form>

                            <?php

                            function getUser(){
                               return trim(shell_exec('whoami'));
                            }

                            $log_path = $_POST['logfile'];
                            $logfilepath = '';

                            /*

                                Important section.

                                This part of the code opens the log file (default or custom) and stores its name/location in a session.
                                Should be considered for finding an alternative in the future. Not reliable although it appears to work properly.

                                На практика се получава 1*2 foreach + 2*2 foreach +3*2 foreach + n*2 foreach. За всеки N редове, които са матчнали, се получават n*(n+1) foreach цикъла. Тъй като foreach цикъла е във for() от 10 итерации, при 1000 реда на 1000-ия ред, $access_log_stamp ще съдържа 1000 елемента, а $seconds_before/$seconds_after ще съдържа 10 000 елемента. Това прави по над 10 милиона (10 010 000) итерации на foreach цикълите за $access_log_stamp за всеки 1000 матчнати реда. Трябва да се препише цялата структура от цикъли по-надолу, за да не се използва triangular growth, а експоненциална.

                            */

                            if (isset($log_path) && !empty($log_path)) {
                                $logfilepath = '/home/'.getUser().'/'.$log_path;
                                $_SESSION['log_path'] = '/home/'.getUser().'/'.$log_path;
                            }
                            else if (isset($_SESSION['log_path']) && !empty($_SESSION['log_path'])) {
                                $logfilepath = $_SESSION['log_path'];
                            } else {
                                $logfilepath = '/home/'. getUser() . '/logfile.txt';
                            }

                            if (!file_exists($logfilepath)) {
                              echo '<div class="alert"><span class="closebtn">&times;</span><strong>Error:</strong> Unable to open file. File <b>'.$logfilepath.'</b> not found. Generate one or load a custom log file in order to proceed.</div>';
                            } else {
                              $logfile = fopen($logfilepath, "r");
                            }

                            if ($logfile) {
                                while (($line = fgets($logfile)) !== false) {
                                    if (preg_match('~^/[^:]+~m', $line, $matched)) { // Regex to match everything until the first ':' to get file names;
                                        $keyedFiles[] = $matched[0];
                                    }
                                }

                                fclose($logfile);
                            } else {
                                //echo "Unable to open file.";
                            }

                            foreach ($keyedFiles as $key => $val) {

                                echo '<pre><font size="3px"><b>'. $val .'</b>';

                                echo ' <a href="#openModal'.$key.'" style="right:45;position:absolute">View file</a></font></pre>

                                        <div id="openModal'.$key.'" class="modalDialog">
                                            <div>
                                                <div class="modal-header">
                                                    <a href="#close" title="Close" class="close">&times</a>
                                                    <h2 style="font-size:20px;margin-top:0px;margin-bottom:0px;">'.$val.'</h2>
                                                </div>'. SyntaxHighlight::process(@file_get_contents_utf8($val)) .'
                                            </div>
                                        </div>';

                                              if (file_exists($val)) { // $val is the name of the file;

                                                  $mtime_raw = shell_exec("stat -c '%y' $val"); // e.g. 2016-08-03 19:39:25.814961787 +0300
                                                  $ctime_raw = shell_exec("stat -c '%z' $val");

                                                  $mtime_readable = shell_exec("date -d '$mtime_raw' '+%d/%b/%Y:%H:%M:%S %z'"); // e.g. 03/Aug/2016:19:39:25 +0300
                                                  $ctime_readable = shell_exec("date -d '$ctime_raw' '+%d/%b/%Y:%H:%M:%S %z'");

                                                  $access_log_stamp[] = shell_exec("date -d @$(stat -c %Z '$val') +'%Y-%m-%d %H:%M:%S'"); // e.g. 2016-08-03 21:39:25

                                                  $seconds_before = array(); // an array to store all 10 seconds before the ctime stamp
                                                  for ($i=0;$i<=10;$i++) {
                                                        foreach ($access_log_stamp as $single_stamp) {
                                                            $seconds_before[] = date("Y-m-d H:i:s", strtotime($single_stamp) - $i); // e.g. 2016-08-03 21:39:33
                                                        }
                                                  }

                                                  $seconds_after = array(); // an array to store all 10 seconds after the ctime stamp 
                                                  for ($i=0;$i<=10;$i++) {
                                                        foreach ($access_log_stamp as $single_stamp) {
                                                            $seconds_after[] = date("Y-m-d H:i:s", strtotime($single_stamp) + $i); // e.g. 2016-08-03 21:39:43
                                                        }
                                                  }

                                                    echo '

                                                    <table class="table table-bordered" style="font-size:15px">
                                                        <tbody>
                                                          <tr>
                                                            <td>mtime</td>
                                                            <td>'. $mtime_readable .'</td>
                                                          </tr>
                                                          <tr>
                                                            <td>ctime</td>
                                                            <td>'. $ctime_readable .'</td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    ';
                                              } else {
                                                  echo '<div class="alert"><span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span><strong>Error!</strong> Unable to stat file. File not found.</div>';
                                              }
                                        }

                                        ?>

                                </div>
                              </div>
                            </div>

<!--
┌ - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -┐
|                                                                                                                                                                              |
|                                                                                                                                                                              |
|                                                                         1.3. ACCESS LOG SCANNER MENU                                                                         |
|                                                                                                                                                                              |
|______________________________________________________________________________________________________________________________________________________________________________|
████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████
-->

                            <div class="tab-pane" id="alogscan">
                              <div class="panel panel-default">
                                <div class="panel-heading">Access log scanner</div>
                                <div class="panel-body">

                                <p><i>Shows all requests from the corresponding access log that have been sent 10 seconds before and forth as of the ctime timestamp of files from the ClamAV log file. It is necessary to specify a local access log file. For example: <b>/home/<?php echo getUser(); ?>/example.com</b> or in other (arbitrary directory), regardless of the file's extension.</i></p>

                                <form class="form-inline" role="form" action="sh-scanner.php#alogscan" method="POST">
                                  <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2">/home/<?php echo getUser(); ?>/</span>
                                    <input type="text" class="form-control" style="width:300px" name="alogfile">
                                  </div>
                                  <button type="submit" class="btn btn-default">Load and process log file</button>
                                </form>

                                <br /><p>Alternatively, another access log file can be chosen:</p>

                                <form class="form-inline" role="form" action="sh-scanner.php#alogscan" method="POST">
                                  <div class="form-group">
                                    <select class="form-control" id="sel1" name="domain-a-log">
                                        <?php

                                        $logs_by_domains = shell_exec('cd /etc/httpd/domlogs/'.getUser().' || exit; ls');

                                        $domains_log_list = array_filter(explode("\n", $logs_by_domains));

                                        foreach ($domains_log_list as $single_a_log) {
                                            echo '<option value="'.$single_a_log.'" name="'.$single_a_log.'">'.$single_a_log.'</option>';
                                        }

                                        ?>
                                    </select>
                                  </div>
                                  <button type="submit" class="btn btn-default">Load and process log file</button>
                                </form>

                                <?php

                                $domain_log_from_server = $_POST['domain-a-log']; // local access log
                                $a_log_path = $_POST['alogfile']; // custom (uploaded) access log
                                $access_log_file = '';

                                if (isset($a_log_path) && !empty($a_log_path)) {
                                    $access_log_file = '/home/'.getUser().'/'.$a_log_path;
                                    $_SESSION['a_log_path'] = '/home/'.getUser().'/'.$a_log_path;
                                }
                                else if (isset($_SESSION['a_log_path']) && !empty($_SESSION['a_log_path'])) {
                                    $access_log_file = $_SESSION['a_log_path'];
                                }

                                if (isset($domain_log_from_server) && !empty($domain_log_from_server)) {
                                    $access_log_file = '/etc/httpd/domlogs/'.getUser().'/'.$domain_log_from_server;
                                    $_SESSION['a_log_path'] = '/etc/httpd/domlogs/'.getUser().'/'.$domain_log_from_server;
                                } else if (isset($_SESSION['a_log_path']) && !empty($_SESSION['a_log_path'])) {
                                    $access_log_file = $_SESSION['a_log_path'];
                                }

                                if (isset($a_log_path) && !empty($a_log_path) && file_exists('/home/'.getUser().'/'.$a_log_path) || isset($domain_log_from_server) && !empty($domain_log_from_server)) {
                                    $access_log_file = '/home/'.getUser().'/'.$a_log_path;

                                    $s_b_readable = array(); // holds 13/Jun/2016:09:55:04 +0200 format seconds before for each ctime timestamp (of every file)

                                    if ($seconds_before === NULL || $seconds_after === NULL) {
                                        echo '<div class="alert"><span class="closebtn">&times;</span><strong>Error:</strong> No log file has been loaded. Specify a log file from <b>1.2. Read ClamAV log file</b> to proceed.</div>';
                                    } else {

                                        foreach ($seconds_before as $seconds_before_readable) {
                                            $s_b_readable[] = shell_exec("date -d '$seconds_before_readable' '+%d/%b/%Y:%H:%M:%S'");
                                        }

                                        $s_a_readable = array(); // holds 13/Jun/2016:09:55:04 +0200 format seconds after for each ctime timestamp (of every file)

                                        foreach ($seconds_after as $seconds_after_readable) {
                                            $s_a_readable[] = shell_exec("date -d '$seconds_after_readable' '+%d/%b/%Y:%H:%M:%S'");
                                        }

                                        $seconds_a_and_b_readable = array_merge($s_b_readable, $s_a_readable); // final result to search for in access log

                                        $result = array_map('trim', array_unique($seconds_a_and_b_readable)); // trimmed as there are empty spaces in the beginning

                                        foreach ($result as $a_match) {
                                            if (shell_exec('LC_COLLATE=C fgrep '.$a_match.' '.$access_log_file. ' | sort -u')) {
                                                $has_result = true;
                                                echo '<pre>'. shell_exec('LC_COLLATE=C fgrep '.$a_match.' '.$access_log_file. ' | sort -u') .'</pre>';
                                            }

                                            if (isset($domain_log_from_server)) {
                                                if (shell_exec('LC_COLLATE=C fgrep '.$a_match.' /etc/httpd/domlogs/'.getUser().'/'.$domain_log_from_server. ' | sort -u')) {
                                                    $has_result = true;
                                                    echo '<pre>'. shell_exec('LC_COLLATE=C fgrep '.$a_match.' /etc/httpd/domlogs/'.getUser().'/'.$domain_log_from_server. ' | sort -u') .'</pre>';
                                                }
                                            }
                                        }

                                        if ($has_result !== true) {
                                            echo '<div class="alert"><span class="closebtn">&times;</span>No matches found.</div>';
                                        }

                                    }

                                } else if (isset($a_log_path) && !empty($a_log_path) && !file_exists('/home/'.getUser().'/'.$a_log_path)) {
                                    echo '<div class="alert"><span class="closebtn">&times;</span><strong>Error:</strong> File <b>/home/'.getUser().'/'. $a_log_path .'</b> not found.</div>';
                                } else if (isset($a_log_path) && empty($a_log_path)) {
                                    echo '<div class="alert"><span class="closebtn">&times;</span><strong>Error:</strong> No file has been specified.</div>';
                                }

                                ?>

                                <hr />

                                <form class="form-inline" role="form" action="sh-scanner.php#alogscan" method="POST">
                                  <div class="form-group">
                                      <button type="submit" name="search-files-alog" class="btn btn-default">Find hits to files from ClamAV log file</button>
                                  </div>
                                </form>

                                <?php

                                if (isset($_POST['search-files-alog'])) {
                                    if (!empty($access_log_file) || isset($domain_log_from_server) && !empty($domain_log_from_server)) {
                                        $clamregex = "~.*\\/\\K([^:]+)~m"; 
                                        $clamfiles = file_get_contents($logfilepath); 
                                         
                                        preg_match_all($clamregex, $clamfiles, $matches);
                                        $clamfiles_final = array_unique($matches[0]);

                                        foreach ($clamfiles_final as $found_file) {
                                            if (shell_exec('LC_COLLATE=C fgrep '.$found_file.' '.$access_log_file)) {
                                                $has_result = true;
                                                echo '<pre class="scrollable-pre-long">'. shell_exec('LC_COLLATE=C fgrep '.$found_file.' '.$access_log_file) .'</pre>';
                                            }
                                        }

                                        if ($has_result !== true) {
                                            echo '<div class="alert"><span class="closebtn">&times;</span>No matches have been found.</div>';
                                        }
                                    } else if (empty($access_log_file) || !isset($domain_log_from_server) && empty($domain_log_from_server)) {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>No access log file has been loaded.</div>';
                                    }
                                
                                }

                                ?>

                                <hr />

                                <form class="form-inline" role="form" action="sh-scanner.php#alogscan" method="POST">
                                  <div class="form-group">
                                    <button type="submit" name="search-hits-alog" class="btn btn-default">Find all hits from IP address</button>
                                    <input type="text" required pattern="^([0-9]{1,3}\.){3}[0-9]{1,3}$" class="form-control" name="ip-addr-hits" placeholder="127.0.0.1, 184.294.16.79, etc">
                                  </div>
                                </form>

                                <?php

                                if (isset($_POST['search-hits-alog']) && !empty($_POST['ip-addr-hits'])) {
                                    if (!empty($access_log_file)) {

                                        if (shell_exec('LC_COLLATE=C fgrep '.$_POST['ip-addr-hits'].' '.$access_log_file)) {
                                            $has_result = true;
                                            echo '<pre class="scrollable-pre-long">'. shell_exec('LC_COLLATE=C fgrep '.$_POST['ip-addr-hits'].' '.$access_log_file) .'</pre>';
                                        }

                                        if ($has_result !== true) {
                                            echo '<div class="alert"><span class="closebtn">&times;</span>No matches have been found.</div>';
                                        }

                                    } else if (empty($access_log_file)) {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>No access log file has been loaded.</div>';
                                    }
                                } else if (isset($_POST['search-hits-alog']) && empty($_POST['ip-addr-hits'])) {
                                    echo '<div class="alert"><span class="closebtn">&times;</span>No IP address has been specified.</div>';
                                }

                                ?>

                                <hr />

                                <form class="form-inline" role="form" action="sh-scanner.php#alogscan" method="POST">
                                  <div class="form-group">
                                    <input type="text" required pattern="^([0-9]{1,3}\.){3}[0-9]{1,3}$" class="form-control" name="ip-addr" placeholder="127.0.0.1, 184.294.16.79, etc">
                                  </div>
                                  <button type="submit" class="btn btn-default">Geolocate IP address</button>
                                </form>

                                <?php

                                function ip_details($ip) {
                                    $json = file_get_contents("http://ipinfo.io/{$ip}");
                                    $details = json_decode($json);

                                    return $details;
                                }

                                $details = ip_details($_POST['ip-addr']); 

                                if (isset($_POST['ip-addr']) && !empty($_POST['ip-addr'])) {
                                    echo '<pre>'. $details->city; echo ', '. $details->country; echo ' ('. $details->region .')</pre><br />';
                                } else if (isset($_POST['ip-addr']) && empty($_POST['ip-addr'])) {
                                    echo 'Invalid IP address supplied';
                                }

                                ?>

                                <div class="alert warning"><span class="closebtn">&times;</span>Don't forget to delete the access log files once such have been uploaded.</div>

                                </div>
                              </div>
                            </div>

<!--
┌ - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -┐
|                                                                                                                                                                              |
|                                                                                                                                                                              |
|                                                                           1.4. FTP LOG SCANNER MENU                                                                          |
|                                                                                                                                                                              |
|______________________________________________________________________________________________________________________________________________________________________________|
████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████
-->

                            <div class="tab-pane" id="flogscan">
                              <div class="panel panel-default">
                                <div class="panel-heading">FTP log scanner</div>
                                <div class="panel-body">

                                <p><i>Searches in the archived FTP logs of the account the same way as the search in the access logs is performed (<b>/home/<?php echo getUser(); ?>/logs</b>).</i></p>

                                <form class="form-inline" role="form" action="sh-scanner.php#flogscan" method="POST">
                                  <button type="submit" name="scan-ftp" class="btn btn-default">Run FTP scan on archived logs</button>
                                </form>

                                <form class="form-inline" role="form" action="sh-scanner.php#flogscan" method="POST">
                                  <div class="form-group">
                                    <select class="form-control" name="domain-f-log">
                                        <?php

                                        $main_domain_name = trim(shell_exec("grep 'main_domain:' /var/cpanel/userdata/$(whoami)/main | awk '{print $2}'"));
                                        $server_ftp_log = '/usr/local/apache/domlogs/ftp.'.$main_domain_name.'-ftp_log';

                                        echo '<option value="'.$server_ftp_log.'" name="'.$server_ftp_log.'">Account\'s local FTP log</option>';

                                        ?>
                                    </select>
                                  </div>
                                  <button type="submit" class="btn btn-default">Load and process log file</button>
                                </form>

                                <?php

                                $domain_flog_from_server = $_POST['domain-f-log'];
                                $f_log_path = $_POST['flogfile'];
                                $ftp_log_file = '';

                                if (isset($f_log_path) && !empty($f_log_path) && file_exists($f_log_path) || isset($domain_flog_from_server) && !empty($domain_flog_from_server)) {
                                    $ftp_log_file = $f_log_path;

                                    $s_b_readable = array(); // holds 13/Jun/2016:09:55:04 +0200 format seconds before for each ctime timestamp (of every file)

                                    if ($seconds_before === NULL || $seconds_after === NULL) {
                                        echo '<div class="alert"><span class="closebtn">&times;</span><strong>Error:</strong> No log file has been loaded. Specify a log file from <b>1.2. Read ClamAV log file</b> to proceed.</div>';
                                    } else {

                                        foreach ($seconds_before as $seconds_before_readable) {
                                            $s_b_readable[] = shell_exec("date -d '$seconds_before_readable GMT+2' '+%a %b %d %H:%M:%S %Y' | tr -d '\n'");
                                        }

                                        $s_a_readable = array(); // holds 13/Jun/2016:09:55:04 +0200 format seconds after for each ctime timestamp (of every file)

                                        foreach ($seconds_after as $seconds_after_readable) {
                                            $s_a_readable[] = shell_exec("date -d '$seconds_after_readable GMT+2' '+%a %b %d %H:%M:%S %Y' | tr -d '\n'");
                                        }

                                        $seconds_a_and_b_readable = array_unique(array_merge($s_b_readable, $s_a_readable)); // final result to search for in access log

                                        //function getLineWithStringFTP($fileName, $str) {
                                        //    $lines = file($fileName);
                                        //    foreach ($lines as $lineNumber => $line) {
                                         //       if (strpos($line, $str) !== false) {
                                         //           return '<pre>'. $line .'</pre>';
                                         //       }
                                         //   }
                                        //}

                                        if (isset($_POST['scan-ftp'])) {
                                            foreach ($seconds_a_and_b_readable as $a_match) {
                                                if (shell_exec("zgrep ". trim($a_match) ." /home/". getUser() ."/logs/*.gz")) {
                                                    echo '<pre>'. shell_exec("zgrep ". trim($a_match) ." /home/". getUser() ."/logs/*.gz") .'</pre>';
                                                } else {
                                                    echo '<div class="alert"><span class="closebtn">&times;</span>No matches have been found.</div>';
                                                }
                                            }
                                        }

                                        foreach ($seconds_a_and_b_readable as $a_match) {
                                            //echo getLineWithStringFTP($ftp_log_file, trim($a_match));

                                            if (isset($domain_flog_from_server)) {
                                                if (shell_exec("LC_COLLATE=C fgrep '$a_match' '$server_ftp_log' | sort -u")) {
                                                    echo '<pre>'. shell_exec("LC_COLLATE=C fgrep '$a_match' '$server_ftp_log' | sort -u") .'</pre>';
                                                }
                                            }

                                        }

                                    }

                                } else if (isset($f_log_path) && !empty($f_log_path) && !file_exists($f_log_path)) {
                                    echo '<div class="alert"><span class="closebtn">&times;</span><strong>Error:</strong> File <b>'. $f_log_path .'</b> not found.</div>';
                                } else if (isset($f_log_path) && empty($f_log_path)) {
                                    echo '<div class="alert"><span class="closebtn">&times;</span><strong>Error:</strong> No file has been specified.</div>';
                                }

                                ?>

                                <div class="alert warning"><span class="closebtn">&times;</span>Don't forget to delete the FTP log files once such have been uploaded.</div>

                                </div>
                              </div>
                            </div>

<!--
┌ - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -┐
|                                                                                                                                                                              |
|                                                                                                                                                                              |
|                                                                         1.5. CPANEL LOG SCANNER MENU                                                                         |
|                                                                                                                                                                              |
|______________________________________________________________________________________________________________________________________________________________________________|
████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████
-->

                            <div class="tab-pane" id="clogscan">
                              <div class="panel panel-default">
                                <div class="panel-heading">cPanel log scanner</div>
                                <div class="panel-body">

                                <p><i>Requires a local cPanel log file to be specified. For example: <b>/home/<?php echo getUser(); ?>/file</b> or in another arbitrary directory, regardless of the extension.</i></p>

                                <form class="form-inline" role="form" action="sh-scanner.php#clogscan" method="POST">
                                  <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2">/home/<?php echo getUser(); ?>/</span>
                                    <input type="text" class="form-control" style="width:300px" name="clogfile">
                                  </div>
                                  <button type="submit" class="btn btn-default">Load and process log file</button>
                                </form>

                                <?php

                                $startScriptTime = microtime(TRUE);

                                $c_log_path = $_POST['clogfile'];
                                $cpanel_log_file = '';

                                if (isset($c_log_path) && !empty($c_log_path)) {
                                    $cpanel_log_file = '/home/'.getUser().'/'.$c_log_path;
                                    $_SESSION['c_log_path'] = '/home/'.getUser().'/'.$c_log_path;

                                } else if (isset($_SESSION['c_log_path']) && !empty($_SESSION['c_log_path'])) {
                                    $cpanel_log_file = $_SESSION['c_log_path'];
                                }

                                if (isset($c_log_path) && !empty($c_log_path) && file_exists('/home/'.getUser().'/'.$c_log_path)) {
                                    $cpanel_log_file = '/home/'.getUser().'/'.$c_log_path;

                                    $s_b_readable = array(); // holds 13/Jun/2016:09:55:04 +0200 format seconds before for each ctime timestamp (of every file)

                                    if ($seconds_before === NULL || $seconds_after === NULL) {
                                        echo '<div class="alert"><span class="closebtn">&times;</span><strong>Error:</strong> No log file has been loaded. Specify a log file from <b>1.2. Read ClamAV log file</b> to proceed.</div>';
                                    } else {

                                        foreach ($seconds_before as $seconds_before_readable) {
                                            $s_b_readable[] = shell_exec("date -u -d '$seconds_before_readable UTC -2 hours' '+%m/%d/%Y:%H:%M:%S'");
                                        }

                                        $s_a_readable = array(); // holds 13/Jun/2016:09:55:04 +0200 format seconds after for each ctime timestamp (of every file)

                                        foreach ($seconds_after as $seconds_after_readable) {
                                            $s_a_readable[] = shell_exec("date -u -d '$seconds_after_readable UTC -2 hours' '+%m/%d/%Y:%H:%M:%S'");
                                        }

                                        $seconds_a_and_b_readable = array_merge($s_b_readable, $s_a_readable); // final result to search for in access log

                                        $result = array_map('trim', array_unique($seconds_a_and_b_readable));

                                        foreach ($result as $a_match) {
                                            if (shell_exec('LC_COLLATE=C fgrep '.$a_match.' '.$cpanel_log_file. ' | sort -u')) {
                                                echo '<pre>'. shell_exec('LC_COLLATE=C fgrep '.$a_match.' '.$cpanel_log_file. ' | sort -u') .'</pre>';
                                            }
                                        }

                                        $endScriptTime=microtime(TRUE);
                                        $totalScriptTime=$endScriptTime-$startScriptTime;
                                        echo "<br />File was loaded and parsed in ".number_format($totalScriptTime, 4). " seconds";
                                        
                                            //var_dump(getLineWithStringcPanel($cpanel_log_file, $result));

                                    }

                                } else if (isset($c_log_path) && !empty($c_log_path) && !file_exists('/home/'.getUser().'/'.$c_log_path)) {
                                    echo '<div class="alert"><span class="closebtn">&times;</span><strong>Error:</strong> File <b>/home/'.getUser().'/'. $c_log_path .'</b> not found.</div>';
                                } else if (isset($c_log_path) && empty($c_log_path)) {
                                    echo '<div class="alert"><span class="closebtn">&times;</span><strong>Error:</strong> No file has been specified.</div>';
                                }

                                ?>

                                <div class="alert warning"><span class="closebtn">&times;</span>Don't forget to delete the cPanel log files once such have been uploaded.</div>

                                </div>
                              </div>
                            </div>

<!--
┌ - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -┐
|                                                                                                                                                                              |
|                                                                                                                                                                              |
|                                                                               1.6. FIND FILES MENU                                                                           |
|                                                                                                                                                                              |
|______________________________________________________________________________________________________________________________________________________________________________|
████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████
-->

                            <div class="tab-pane" id="searcharchives">
                              <div class="panel panel-default">
                                <div class="panel-heading">Find extracted files</div>
                                <div class="panel-body">

                                <form class="form-inline" role="form" action="sh-scanner.php#searcharchives" method="POST">
                                    <div class="form-group">
                                      <button type="submit" name="find-archives" class="btn btn-default">Search for archives in /home/<?php echo getUser();?></button>
                                    </div>

                                    <br /><br />

                                    <div class="form-group">
                                      <button type="submit" name="find-archives-custom" class="btn btn-default">Search for archives in</button>
                                    </div>
                                    <div class="input-group">
                                      <span class="input-group-addon" id="sizing-addon2">/home/<?php echo getUser(); ?>/</span>
                                      <input type="text" class="form-control" style="width:300px" name="archives-dir-search">
                                    </div>
                                </form>

                                <p>Only search for specific extensions:</p>

                                <div id="mv-right" class="row">

                                <form class="form-inline" role="form" action="sh-scanner.php#searcharchives" method="POST">

                                <div class="form-group">

                                  <div class="col-xs-2" style="width:120px;">
                                    <div class="input-group">

                                      <span class="input-group-addon">
                                        <input type="checkbox" name="check_list[]" value="tar.gz" aria-label="...">
                                      </span>

                                      <input type="text" disabled="disabled" id="archives-checkboxes" class="form-control" value=".tar.gz" aria-label="...">

                                    </div>
                                  </div>


                                  <div class="col-xs-2" style="width:107px;">
                                    <div class="input-group">

                                      <span class="input-group-addon">
                                        <input type="checkbox" name="check_list[]" value="tar" aria-label="...">
                                      </span>

                                      <input type="text" disabled="disabled" id="archives-checkboxes" class="form-control" value=".tar" aria-label="...">

                                    </div>
                                  </div>


                                  <div class="col-xs-2" style="width:105px;">
                                    <div class="input-group">

                                      <span class="input-group-addon">
                                        <input type="checkbox" name="check_list[]" value="gz" aria-label="...">
                                      </span>

                                      <input type="text" disabled="disabled" id="archives-checkboxes" class="form-control" value=".gz" aria-label="...">

                                    </div>
                                  </div>


                                  <div class="col-xs-2" style="width:105px;">
                                    <div class="input-group">

                                      <span class="input-group-addon">
                                        <input type="checkbox" name="check_list[]" value="zip" aria-label="...">
                                      </span>

                                      <input type="text" disabled="disabled" id="archives-checkboxes" class="form-control" value=".zip" aria-label="...">

                                    </div>
                                  </div>


                                  <div class="col-xs-2" style="width:105px;">
                                    <div class="input-group">

                                      <span class="input-group-addon">
                                        <input type="checkbox" name="check_list[]" value="rar" aria-label="...">
                                      </span>

                                      <input type="text" disabled="disabled" id="archives-checkboxes" class="form-control" value=".rar" aria-label="...">

                                    </div>
                                  </div>


                                  <div class="col-xs-2" style="width:130px;">
                                    <div class="input-group">

                                      <span class="input-group-addon">
                                        <input type="checkbox" name="check_list[]" value="tar.bz2" aria-label="...">
                                      </span>

                                      <input type="text" disabled="disabled" id="archives-checkboxes" class="form-control" value=".tar.bz2" aria-label="...">

                                    </div>
                                  </div>


                                  <div class="col-xs-2" style="width:110px;">
                                    <div class="input-group">

                                      <span class="input-group-addon">
                                        <input type="checkbox" name="check_list[]" value="tgz" aria-label="...">
                                      </span>

                                      <input type="text" disabled="disabled" id="archives-checkboxes" class="form-control" value=".tgz" aria-label="...">

                                    </div>
                                  </div>                                  


                                  <div class="col-xs-2" style="width:110px;">
                                    <div class="input-group">

                                      <span class="input-group-addon">
                                        <input type="checkbox" name="check_list[]" value="bz2" aria-label="...">
                                      </span>

                                      <input type="text" disabled="disabled" id="archives-checkboxes" class="form-control" value=".bz2" aria-label="...">

                                    </div>
                                  </div>


                                  <div class="col-xs-2" style="width:105px;">
                                    <div class="input-group">

                                      <span class="input-group-addon">
                                        <input type="checkbox" id= name="check_list[]" value="7z" aria-label="...">
                                      </span>

                                      <input type="text" disabled="disabled" id="archives-checkboxes" class="form-control" value=".7z" aria-label="...">

                                    </div>
                                  </div><br /><br /><br />

                                </div>

                                  <div class="form-group">
                                      <button type="submit" name="checkbox-submit" class="btn btn-default">Search for the above selected specific extensions in /home/<?php echo getUser(); ?></button>
                                  </div><br /><br />

                                  <div class="form-group">
                                      <button type="submit" name="checkbox-custom-dir-submit" class="btn btn-default">Search for the above selected specific extensions in</button>
                                  </div>

                                  <div class="input-group">
                                      <span class="input-group-addon" id="sizing-addon2">/home/<?php echo getUser(); ?>/</span>
                                      <input type="text" class="form-control" style="width:300px" name="archives-dir-search-extensions">
                                  </div>

                                </form>

                                </div><!-- /.row -->

                                <?php

                                if (isset($_POST['checkbox-submit'])) {
                                    if (!empty($_POST['check_list'])) {
                                        foreach ($_POST['check_list'] as $check) {
                                            if (shell_exec('find /home/'.getUser().' -regex ".*\.\('.$check.'\)" -print0 | xargs -r0 stat -c %z\ %n | sort -r')) {
                                                echo '<pre style="height: auto;max-height:200px;overflow:auto;">'. shell_exec('find /home/'.getUser().' -regex ".*\.\('.$check.'\)" -print0 | xargs -r0 stat -c %z\ %n | sort -r') .'</pre>';
                                            }
                                        }
                                    } else if (empty($_POST['check_list'])) {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>No extension(s) has been specified.</div>';
                                    }
                                } else if (isset($_POST['checkbox-custom-dir-submit'])) {
                                    if (isset($_POST['archives-dir-search-extensions']) && !empty($_POST['archives-dir-search-extensions'])) {
                                        if (!empty($_POST['check_list'])) {
                                            foreach ($_POST['check_list'] as $check) {
                                                if (shell_exec('find /home/'.getUser().'/'.$_POST["archives-dir-search-extensions"].' -regex ".*\.\('.$check.'\)" -print0 | xargs -r0 stat -c %z\ %n | sort -r')) {
                                                    echo '<pre style="height:auto;max-height:200px;overflow:auto;">'. shell_exec('find /home/'.getUser().'/'.$_POST["archives-dir-search-extensions"].' -regex ".*\.\('.$check.'\)" -print0 | xargs -r0 stat -c %z\ %n | sort -r') .'</pre>';
                                                }
                                            }
                                        }
                                    } else if (isset($_POST['archives-dir-search-extensions']) && empty($_POST['archives-dir-search-extensions'])) {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>No directory has been specified.</div>';
                                    }
                                }

                                ?>

                                <?php

                                if (isset($_POST['find-archives'])) {
                                    echo '<pre style="height:auto;max-height:200px;overflow:auto;">'. shell_exec('find /home/'.getUser().' -regex ".*\.\(zip\|tar.gz\|tar\|7zip\|rar\|bz2\|gz\|7z\|tgz\|tar.bz2\)" -print0 | xargs -r0 stat -c %z\ %n | sort -r') .'</pre>';
                                } else if (isset($_POST['find-archives-custom'])) {
                                    if (isset($_POST['archives-dir-search']) && !empty($_POST['archives-dir-search'])) {
                                        if (shell_exec('find /home/'.getUser().'/'.$_POST["archives-dir-search"].' -regex ".*\.\(zip\|tar.gz\|tar\|7zip\|rar\|bz2\|gz\|7z\|tgz\|tar.bz2\)" -print0 | xargs -r0 stat -c %z\ %n | sort -r')) {
                                            echo '<pre style="height:auto;max-height:200px;overflow:auto;">'. shell_exec('find /home/'.getUser().'/'.$_POST["archives-dir-search"].' -regex ".*\.\(zip\|tar.gz\|tar\|7zip\|rar\|bz2\|gz\|7z\|tgz\|tar.bz2\)" -print0 | xargs -r0 stat -c %z\ %n | sort -r') .'</pre>';
                                        } else {
                                            echo '<div class="alert"><span class="closebtn">&times;</span>No archives have been found as per the search criteria.</div>';
                                        }
                                    } else if (isset($_POST['archives-dir-search']) && empty($_POST['archives-dir-search'])) {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>No directory has been specified.</div>';
                                    }
                                }

                                ?>

                                <br />
                                <form class="form-inline" role="form" action="sh-scanner.php#searcharchives" method="POST">
                                    <div class="form-group">
                                      <button type="submit" disabled="disabled" name="check-archives" class="btn btn-info">Check if files from the ClamAV log file exist in the archives</button>
                                    </div>
                                </form>

                                <div class="alert info"><span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>Searching for files in archives that are not extracted is only supported for the following archive types: <b>.zip</b>, <b>.tar</b>, <b>.tar.gz</b>, <b>.tar.bz2</b>.</div>

                                <?php

                                if (isset($_POST['check-archives'])) {
                                    echo '<pre>'. shell_exec('unzip -l /home/homeqpig/cpu/tmp/cryptographyexposed.zip | grep check-mark-8-xxl.png') .'</pre>';
                                }

                                ?>

                                </div>
                              </div>
                            </div>

<!--
┌ - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -┐
|                                                                                                                                                                              |
|                                                                                                                                                                              |
|                                                                   1.7. LAST FILE INODE CHANGES MENU                                                                          |
|                                                                                                                                                                              |
|______________________________________________________________________________________________________________________________________________________________________________|
████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████
-->

                            <div class="tab-pane" id="inodechange">
                              <div class="panel panel-default">
                                <div class="panel-heading">File inode change</div>
                                <div class="panel-body">

                                <p><i>Allows for the search of files with a modified inode information in the last <b>[N]</b> days with an <b>[X]</b> extension. To match any extension, you can use <span class="label label-default">*</span>. Example:</i></p>
<pre>
Directory: /home/<?php echo getUser(); ?>/...
Days ago: 5
Extension: .php
</pre>
                                <p>Default: <span class="label label-default">/home/<?php echo getUser(); ?>/</span> <span class="label label-default">10 days</span> <span class="label label-default">.php</span></p><br />

                                <form class="form-inline" role="form" action="sh-scanner.php#inodechange" method="POST">
                                    <div class="input-group" style="margin-top:10px">
                                      <span class="input-group-addon" id="sizing-addon2">/home/<?php echo getUser(); ?>/</span>
                                      <input type="text" class="form-control" style="width:550px" name="inode-dir" id="time">
                                    </div><br />
                                    <div class="form-group" style="margin-top:10px">
                                      <label for="time">Days ago:&#160;&#160;&#160;&#160;</label>
                                      <input type="number" class="form-control" name="inode-ctime" id="time" placeholder="5, 10, 13, 24 etc.">
                                    </div><br />
                                    <div class="form-group" style="margin-top:10px">
                                      <label for="ext">Extension:</label>
                                      <input type="text" class="form-control" name="extension" id="ext" placeholder=".php, .js, .xhtml etc.">
                                    </div>
                                  <button type="submit" class="btn btn-default" id="search-btn-inode">Search for files</button>
                                </form>

                                <?php

                                $inode_dir = $_POST['inode-dir'];
                                $inode_ext = $_POST['extension'];
                                $inode_day = $_POST['inode-ctime'];

      /* none are set */        if (isset($inode_dir) && empty($inode_dir) && isset($inode_day) && empty($inode_day) && isset($inode_ext) && empty($inode_ext)) {
                                    if (shell_exec('find /home/'.getUser().'/ -type f -ctime -10 -name "*.php" -print0 | xargs -r0 stat -c %z\ %n | sort')) {
                                        echo '<pre class="scrollable-pre">'. shell_exec('find /home/'.getUser().'/ -type f -ctime -10 -name "*.php" -print0 | xargs -r0 stat -c %z\ %n | sort') .'</pre>';
                                    } else {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>No files have been modified as per the search criteria.</div>';
                                    }
                                }
       /* all are set */        if (isset($inode_dir) && !empty($inode_dir) && isset($inode_day) && !empty($inode_day) && isset($inode_ext) && !empty($inode_ext)) {
                                    if (shell_exec('find /home/'.getUser().'/'. $inode_dir .' -type f -ctime -' . $inode_day .' -name "*'. $inode_ext .'" -print0 | xargs -r0 stat -c %z\ %n | sort')) {
                                        echo '<pre class="scrollable-pre">'. shell_exec('find /home/'.getUser().'/'. $inode_dir .' -type f -ctime -' . $inode_day .' -name "*'. $inode_ext .'" -print0 | xargs -r0 stat -c %z\ %n | sort') .'</pre>';
                                    } else {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>No files have been modified as per the search criteria.</div>';
                                    }
                                }
    /* only dir is set */       if (isset($inode_dir) && !empty($inode_dir) && isset($inode_day) && empty($inode_day) && isset($inode_ext) && empty($inode_ext)) {
                                    if (shell_exec('find /home/'.getUser().'/'. $inode_dir .' -type f -ctime -10 -name "*.php" -print0 | xargs -r0 stat -c %z\ %n | sort')) {
                                        echo '<pre class="scrollable-pre">'. shell_exec('find /home/'.getUser().'/'. $inode_dir .' -type f -ctime -10 -name "*.php" -print0 | xargs -r0 stat -c %z\ %n | sort') .'</pre>';
                                    } else {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>No files have been modified as per the search criteria.</div>';
                                    }
                                }
    /* only time is set */      if (isset($inode_dir) && empty($inode_dir) && isset($inode_day) && !empty($inode_day) && isset($inode_ext) && empty($inode_ext)) {
                                    if (shell_exec('find /home/'.getUser().'/ -type f -ctime - '. $inode_day .' -name "*.php" -print0 | xargs -r0 stat -c %z\ %n | sort')) {
                                        echo '<pre class="scrollable-pre">'. shell_exec('find /home/'.getUser().'/ -type f -ctime - '. $inode_day .' -name "*.php" -print0 | xargs -r0 stat -c %z\ %n | sort') .'</pre>';
                                    } else {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>No files have been modified as per the search criteria.</div>';
                                    }
                                }
    /* only ext is set */       if (isset($inode_dir) && empty($inode_dir) && isset($inode_day) && empty($inode_day) && isset($inode_ext) && !empty($inode_ext)) {
                                    if ($inode_ext == '*') {
                                        if (shell_exec('find /home/'.getUser().'/ -type f -ctime -10 -name "*" -print0 | xargs -r0 stat -c %z\ %n | sort')) {
                                            echo '<pre class="scrollable-pre">'. shell_exec('find /home/'.getUser().'/ -type f -ctime -10 -name "*" -print0 | xargs -r0 stat -c %z\ %n | sort') .'</pre>';
                                        }
                                    }
                                    else if ($inode_ext != '*' && shell_exec('find /home/'.getUser().'/ -type f -ctime -10 -name "*'. $inode_ext .'" -print0 | xargs -r0 stat -c %z\ %n | sort')) {
                                        echo '<pre class="scrollable-pre">'. shell_exec('find /home/'.getUser().'/ -type f -ctime -10 -name "*'. $inode_ext .'" -print0 | xargs -r0 stat -c %z\ %n | sort') .'</pre>';
                                    } else {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>No files have been modified as per the search criteria.</div>';
                                    }
                                }
    /* dir & time set */        if (isset($inode_dir) && !empty($inode_dir) && isset($inode_day) && !empty($inode_day) && isset($inode_ext) && empty($inode_ext)) {
                                    if (shell_exec('find /home/'.getUser().'/'. $inode_dir .' -type f -ctime - '. $inode_day .' -name "*.php" -print0 | xargs -r0 stat -c %z\ %n | sort')) {
                                        echo '<pre class="scrollable-pre">'. shell_exec('find /home/'.getUser().'/'. $inode_dir .' -type f -ctime - '. $inode_day .' -name "*.php" -print0 | xargs -r0 stat -c %z\ %n | sort') .'</pre>';
                                    } else {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>No files have been modified as per the search criteria.</div>';
                                    }
                                }
     /* dir & ext set */        if (isset($inode_dir) && !empty($inode_dir) && isset($inode_day) && empty($inode_day) && isset($inode_ext) && !empty($inode_ext)) {
                                    if ($inode_ext == '*') {
                                        if (shell_exec('find /home/'.getUser().'/'. $inode_dir .' -type f -ctime -10 -name "*" -print0 | xargs -r0 stat -c %z\ %n | sort')) {
                                            echo '<pre class="scrollable-pre">'. shell_exec('find /home/'.getUser().'/'. $inode_dir .' -type f -ctime -10 -name "*" -print0 | xargs -r0 stat -c %z\ %n | sort') .'</pre>';
                                        }
                                    }
                                    else if ($inode_ext != '*' && shell_exec('find /home/'.getUser().'/'. $inode_dir .' -type f -ctime -10 -name "*'. $inode_ext .'" -print0 | xargs -r0 stat -c %z\ %n | sort')) {
                                        echo '<pre class="scrollable-pre">'. shell_exec('find /home/'.getUser().'/'. $inode_dir .' -type f -ctime -10 -name "*'. $inode_ext .'" -print0 | xargs -r0 stat -c %z\ %n | sort') .'</pre>';
                                    } else {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>No files have been modified as per the search criteria.</div>';
                                    }
                                }
    /* ext & time set */        if (isset($inode_dir) && empty($inode_dir) && isset($inode_day) && !empty($inode_day) && isset($inode_ext) && !empty($inode_ext)) {
                                    if ($inode_ext == '*') {
                                        if (shell_exec('find /home/'.getUser().'/ -type f -ctime -'. $inode_day .' -name "*" -print0 | xargs -r0 stat -c %z\ %n | sort')) {
                                            echo '<pre class="scrollable-pre">'. shell_exec('find /home/'.getUser().'/ -type f -ctime -'. $inode_day .' -name "*" -print0 | xargs -r0 stat -c %z\ %n | sort') .'</pre>';
                                        }
                                    }
                                    else if ($inode_ext != '*' && shell_exec('find /home/'.getUser().'/ -type f -ctime -'. $inode_day .' -name "*'. $inode_ext .'" -print0 | xargs -r0 stat -c %z\ %n | sort')) {
                                        echo '<pre class="scrollable-pre">'. shell_exec('find /home/'.getUser().'/ -type f -ctime -'. $inode_day .' -name "*'. $inode_ext .'" -print0 | xargs -r0 stat -c %z\ %n | sort') .'</pre>';
                                    } else {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>No files have been modified as per the search criteria.</div>';
                                    }
                                }

                                ?>

                                </div>
                              </div>
                            </div>

<!--
┌ - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -┐
|                                                                                                                                                                              |
|                                                                                                                                                                              |
|                                                                     1.8. DEOBFUSCATION TOOLS MENU                                                                            |
|                                                                                                                                                                              |
|______________________________________________________________________________________________________________________________________________________________________________|
████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████
-->

                            <div class="tab-pane" id="deobftools">
                              <div class="panel panel-default">
                                <div class="panel-heading">Deobfuscation tools</div>
                                <div class="panel-body">

                                <ul>
                                    <li><a href='http://lombokcyber.com/en/detools/' target='_blank'>http://lombokcyber.com/en/detools/</a></li>
                                    - contains several tools for deobfuscation of PHP code<br /><br />
                                    <li><a href='http://ddecode.com/phpdecoder/' target='_blank'>http://ddecode.com/phpdecoder/</a></li>
                                    - for generic deobfuscation<br /><br />
                                    <li><a href='http://www.unphp.net/' target='_blank'>http://www.unphp.net/</a></li>
                                    - for generic deobfuscation<br /><br />
                                    <li><a href='http://phpbeautifier.com/' target='_blank'>http://phpbeautifier.com/</a></li>
                                    - for tidying and making the code more readable<br /><br />
                                    <li><a href='http://www.cleancss.com/php-beautify/' target='_blank'>http://www.cleancss.com/php-beautify/</a></li>
                                    - for tidying and making the code more readable<br /><br />
                                    <li><a href='http://crypo.pw/secure-base64c-online' target='_blank'>http://crypo.pw/secure-base64c-online</a></li>
                                    - for converting base64 to ASCII<br /><br />
                                    <li><a href='http://decode.svetog.com/fopo' target='_blank'>http://decode.svetog.com/fopo</a></li>
                                    - for deobfuscation of FOPO obfuscated files
                                </ul>

                                </div>
                              </div>
                            </div>

<!--
┌ - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -┐
|                                                                                                                                                                              |
|                                                                                                                                                                              |
|                                                                      1.9. SIGNATURE REPOSITORIES MENU                                                                        |
|                                                                                                                                                                              |
|______________________________________________________________________________________________________________________________________________________________________________|
████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████
-->

                            <div class="tab-pane" id="sigrepos" name="sigrepos"><a name="sigrepos"></a>
                              <div class="panel panel-default">
                                <div class="panel-heading">Signatures</div>
                                <div class="panel-body">

                                <p>Repositories:</p>

                                <ul>
                                    <li><a href='http://ftp.tiscali.nl/pub/mirror/sanesecurity/' target='_blank'>http://ftp.tiscali.nl/pub/mirror/sanesecurity/</a></li>
                                    <li><a href='https://www.rfxn.com/downloads/rfxn.ndb' target='_blank'>https://www.rfxn.com/downloads/rfxn.ndb</a></li>
                                    <li><a href='https://www.rfxn.com/downloads/rfxn.hdb' target='_blank'>https://www.rfxn.com/downloads/rfxn.hdb</a></li>
                                </ul>

                                <p>For those who cannot be found in any of the above repositories, you can search locally:</p>
                                <pre>LC_COLLATE=C fgrep -ra &lt;signature&gt; /var/lib/clamav</pre>

                                <p>Since signatures are stored in hexadecimal format, you need to copy the string <i>(for example: 5469746c653a4a73705765627368656c6c)</i> and convert it to ASCII using the form below:</p>

                                <form class="form-inline" role="form" action="sh-scanner.php#sigrepos" method="POST">
                                  <div class="form-group">
                                    <input type="text" style="width:300px" class="form-control" name="hex">
                                  </div>
                                  <button type="submit" class="btn btn-default">Decode</button>
                                </form>

                                <?php

                                if (isset($_POST['hex']) && !empty($_POST['hex'])) {
                                    echo '<pre><textarea readonly style="width:100%;height:25px;border:0px;background-color:transparent;">'. hex2bin($_POST['hex']) .'</textarea></pre>';
                                } else if (isset($_POST['hex']) && empty($_POST['hex'])) {
                                    echo '<div class="alert"><span class="closebtn">&times;</span>You must supply a string/signature in hexadecimal.</div>';
                                }

                                ?>

                                <p>Description and documentation of the signatures can be found <a href='https://github.com/vrtadmin/clamav-devel/raw/master/docs/signatures.pdf' target='_blank'>here</a>.

                                </div>
                              </div>
                            </div>

<!--
┌ - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -┐
|                                                                                                                                                                              |
|                                                                                                                                                                              |
|                                                                      2.0. DEOBFUSCATION TOOLS MENU                                                                           |
|                                                                                                                                                                              |
|______________________________________________________________________________________________________________________________________________________________________________|
████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████
-->

                            <div class="tab-pane" id="scanmalware" name="scanmalware">
                              <div class="panel panel-default">
                                <div class="panel-heading">Scan malware online</div>
                                <div class="panel-body">

                                <ul>
                                    <li><a href='https://www.virustotal.com/' target='_blank'>https://www.virustotal.com/</a></li>
                                    - provides the ability to scan files of any type in multiple antivirus programs<br /><br />
                                    <li><a href='https://www.metadefender.com/#!/scan-file' target='_blank'>https://www.metadefender.com/</a></li>
                                    - provides the ability to scan files of any type in multiple antivirus programs<br /><br />
                                    <li><a href='http://www.virscan.org/' target='_blank'>http://www.virscan.org/</a></li>
                                    - provides the ability to scan files of any type in multiple antivirus programs<br /><br />
                                    <li><a href='https://sitecheck.sucuri.net/' target='_blank'>https://sitecheck.sucuri.net/</a></li>
                                    - provides the ability to scan client-side files (.html, .js, and others) for malicious code
                                </ul>

                                </div>
                              </div>
                            </div>

<!--
┌ - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -┐
|                                                                                                                                                                              |
|                                                                                                                                                                              |
|                                                                   2.1. SEARCH FOR CLAMAV LOG FILES MENU                                                                      |
|                                                                                                                                                                              |
|______________________________________________________________________________________________________________________________________________________________________________|
████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████
-->

                            <div class="tab-pane" id="searchclamavlog" name="searchclamavlog"><a name="searchclamavlog"></a>
                              <div class="panel panel-default">
                                <div class="panel-heading">Search for ClamAV log files</div>
                                <div class="panel-body">

                                <form class="form-inline" role="form" action="sh-scanner.php#searchclamavlog" method="POST">
                                    <div class="form-group">
                                      <button type="submit" name="find-log" class="btn btn-default">Search for ClamAV log files in /home/<?php echo getUser();?></button>
                                    </div>

                                    <br /><br />

                                    <div class="form-group">
                                      <button type="submit" name="find-log-custom" class="btn btn-default">Search for ClamAV log files in</button>
                                    </div>
                                    <div class="input-group">
                                      <span class="input-group-addon" id="sizing-addon2">/home/<?php echo getUser(); ?>/</span>
                                      <input type="text" class="form-control" style="width:300px" name="log-dir-search">
                                    </div>
                                </form>

                                <?php

                                if (isset($_POST['find-log'])) {

                                   $tmpflname = tempnam("/tmp", "SH-SC");
                                   shell_exec('grep -rFxl --exclude=".bash_history" -- "-------------------------------------------------------------------------------" /home/'. getUser() .' > '. $tmpflname .' &'); // Runs shell_exec() in background ('&');

                                   $_SESSION['tmpflname'] = $tmpflname; // Stores the temporary file in a session so that it can be unlinked later on;

                                   echo '<div class="alert success"><span class="closebtn">&times;</span>The process has been started successfully!</div>';
                                }
                                else if (isset($_POST['find-log-custom'])) {

                                    if (isset($_POST['log-dir-search']) && !empty($_POST['log-dir-search'])) {
                                        $tmpflname = tempnam("/tmp", "SH-SC");
                                        shell_exec('grep -rFxl --exclude=".bash_history" -- "-------------------------------------------------------------------------------" /home/'. getUser().'/'.$_POST["log-dir-search"].' > '. $tmpflname .' &'); // Runs shell_exec() in background ('&');

                                        $_SESSION['tmpflname'] = $tmpflname; // Stores the temporary file in a session so that it can be unlinked later on;

                                        echo '<div class="alert success"><span class="closebtn">&times;</span>The process has been started successfully!</div>';

                                    } else if (isset($_POST['log-dir-search']) && empty($_POST['log-dir-search'])) {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>No directory has been specified.</div>';
                                    }
                                }

                                ?>

                                <form class="form-inline" role="form" action="sh-scanner.php#searchclamavlog" method="POST">
                                    <div class="form-group">
                                      <button type="submit" name="check-and-delete-grep" class="btn btn-info">Check if the search is running and delete the temporary file</button>
                                    </div>
                                </form>

                                <?php

                                if (isset($_POST['check-and-delete-grep'])) {

                                    if (shell_exec("pgrep grep") != '') {
                                        echo '<div class="alert warning"><span class="closebtn">&times;</span>The process is still running.</div>';

                                    } else {
                                        echo '<div class="alert success"><span class="closebtn">&times;</span>The process is NOT running. Temporary file has been deleted. Output is given below.</div>';

                                        $tmpflname = $_SESSION['tmpflname']; // Return the name of the temporary file stored in the session;

                                        echo 'Possible ClamAV log files:<pre>'. file_get_contents($tmpflname) .'</pre>';
                                        unlink($tmpflname); // Delete temporary file;
                                    }
                                }

                                ?>

                                </div>
                              </div>
                            </div>

<!--
┌ - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -┐
|                                                                                                                                                                              |
|                                                                                                                                                                              |
|                                                                            2.2. MISCELLANEOUS MENU                                                                           |
|                                                                                                                                                                              |
|______________________________________________________________________________________________________________________________________________________________________________|
████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████
-->

                            <div class="tab-pane" id="misc" name="misc">
                              <div class="panel panel-default">
                                <div class="panel-heading">Miscellaneous</div>
                                <div class="panel-body">

                                <p>Useful links</p>

                                <ul>
                                    <li><a href='https://www.diffchecker.com/' target='_blank'>https://www.diffchecker.com/</a></li>
                                    - provides the ability to compare file content. With his help, the original system code can be compared to the client's original code in order to detect the differences (inserted malicious code)<br /><br />
                                    <li><a href='http://finder.insidepro.com/' target='_blank'>http://finder.insidepro.com/</a></li>
                                    <li><a href='https://hashkiller.co.uk/md5-decrypter.aspx' target='_blank'>https://hashkiller.co.uk/md5-decrypter.aspx</a> <i>(only for MD5 and SHA-1)</i></li>
                                    - provides the opportunity to search for hash. If a file that we suspect is a shell requires access data, we can look for a hash in the code and check if its value is present in the databases on any of the listed websites<br /><br />
                                </ul>

                                <p>Stat an arbitrary file.</p>

                                <form class="form-inline" role="form" action="sh-scanner.php#misc" method="POST">
                                    <div class="form-group">
                                      <button type="submit" name="stat-file-btn" class="btn btn-default">Stat the file </button>
                                    </div>

                                    <div class="input-group">
                                      <span class="input-group-addon" id="sizing-addon2">/home/<?php echo getUser(); ?>/</span>
                                      <input type="text" class="form-control" style="width:300px" name="stat-file-path" value="">
                                    </div>
                                </form>

                                <?php

                                if (isset($_POST['stat-file-btn'])) {
                                    if (isset($_POST['stat-file-path']) && !empty($_POST['stat-file-path']) && !file_exists('/home/'.getUser().'/'.$_POST['stat-file-path'])) {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>The specified file is not found.</div>';
                                    } else if (isset($_POST['stat-file-path']) && !empty($_POST['stat-file-path']) && file_exists('/home/'.getUser().'/'.$_POST['stat-file-path'])) {
                                        echo '<pre>'. shell_exec('stat /home/'.getUser().'/'.$_POST['stat-file-path']) . '</pre>';
                                        echo '/home/'.getUser().'/'.$_POST['stat-file-path'];
                                    } else if (isset($_POST['stat-file-path']) && empty($_POST['stat-file-path'])) {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>No file has been specified.</div>';
                                    }
                                }
                                
                                ?>

                                <br />

                                <form class="form-inline" role="form" action="sh-scanner.php#misc" method="POST">
                                    <div class="form-group">
                                      <button type="submit" name="cronjob-btn" class="btn btn-default">Show current cron jobs</button>
                                    </div>

                                    <div class="form-group">
                                      <button type="submit" name="cpanel-logins-btn" class="btn btn-default">Last cPanel logins</button>
                                    </div>

                                    <div class="form-group">
                                      <button type="submit" name="ssh-history-btn" class="btn btn-default">Show latest SSH history</button>
                                    </div>

                                    <div class="form-group">
                                      <button type="submit" name="ssh-login-btn" class="btn btn-default">Last SSH login</button>
                                    </div>
                                </form>

                                <?php

                                if (isset($_POST['cronjob-btn'])) {
                                    if (shell_exec('crontab -l')) {
                                        echo '<pre>'. shell_exec("crontab -l") . '</pre>'; // pipe with sed -n '1!p' for removing the first line
                                    } else {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>There are no cron jobs for this user.</div>';
                                    }
                                }

                                if (isset($_POST['cpanel-logins-btn'])) {
                                    if (shell_exec('cat /home/'.getUser().'/.lastlogin')) {
                                        echo '<pre>'. shell_exec('cat /home/'.getUser().'/.lastlogin') . '</pre>';
                                    } else {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>No cPanel logins have been found for this user.</div>';
                                    }
                                }

                                if (isset($_POST['ssh-history-btn'])) {
                                    if (shell_exec('cat /home/'.getUser().'/.bash_history')) {
                                        echo '<pre style="height:auto;max-height:200px;overflow:auto;">'. shell_exec('cat /home/'.getUser().'/.bash_history') . '</pre>';
                                    } else {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>There is no available SSH history for this user.</div>';
                                    }
                                }

                                if (isset($_POST['ssh-login-btn'])) {
                                    if (shell_exec('pinky | grep '.getUser())) {
                                        echo '<pre style="height:auto;max-height:200px;overflow:auto;">'. shell_exec('pinky | grep '.getUser()) . '</pre>';
                                    } else {
                                        echo '<div class="alert"><span class="closebtn">&times;</span>There have been no recent SSH logins for this user.</div>';
                                    }
                                }
                                
                                ?>

                                </div>
                              </div>
                            </div>

                    </div><!-- tab content -->

        </div>

        <footer class="pull-left footer">
            <p class="col-md-12">
                <hr class="divider">
                <p>Developed by <a href="https://github.com/Keeperr" target="_blank" style="color:#c7c7c7!important">Keeper</a></p>
            </p>
        </footer>

    </div>

    <!-- The snippet of JavaScript below is used for closing/hiding notifications -->

    <script type='text/javascript'>
    var close = document.getElementsByClassName("closebtn");
    var i;

    for (i = 0; i < close.length; i++) {
        close[i].onclick = function(){
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 600);
        }
    }
    </script>

    </body>
    </html>