@extends('layouts.app')

@section('content')
<div class="container">
    <table>
    <tr>
        <th>Brand</th>
        <th>Model</th>
        <th>Company</th>
    </tr>
    <tr>
        <td>Acer
        <img src="/acer.jpg" alt="">
        </td>
        <td>Acer Aspire E1-572-34014G50Mnkk</td>
        <td>Acer Company</td>
    </tr>
    <tr>
        <td>Dell
        <img src="/images.jpg" alt="">
        </td>
        <td>Dell Latitude E7440, 4th-gen core i5</td>
        <td>Dell Company</td>
    </tr>
    <tr>
         <td>Asus
        <img src="/asus.jpg" alt="">
        </td>
        <td>Asus ROG Strix Scar III. Asus ROG Zephyrus G14</td>
        <td>Asus Company</td>
</table>
</div>
    </tr>
@endsection
<style>

table, th, td{
    border:70px solid black;
    padding:10px;
    background-color: cyan;
    width: 900px;
    height: 150px;
    text-align: center;
    }
   img{
       width: 150px;
       height: 100px;
   }
</style>





