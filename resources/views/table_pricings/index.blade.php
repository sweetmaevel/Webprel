@extends('layouts.app')

@section('content')
   <div class="container">
    <table>
    <tr>
        <th>Acer</th>
        <th>Dell</th>
        <th>Asus</th>
    </tr>
    <tr>
    <td>Acer<img src="/Acer.jpg" alt="">
    </td>
    <td>Dell<img src="/images.jpg" alt="">
    </td>
    <td>Asus<img src="/Asus.jpg" alt="">
    </td>
    </tr>
    <tr>
        <th> $35500 to $50000</th>
        <th>₱ 50000 to ₱70000.</th>
        <th> ₱75000-₱85200</th>
    </tr>
   
</table>
</div>
    </tr>
@endsection
<style>

table, th, td{
    border:50px black;
    padding:10px;
    background-color: pink;
    width: 900px;
    height: 150px;
    text-align: center;
    }
   img{
       width: 150px;
       height: 100px;
   }
</style>

