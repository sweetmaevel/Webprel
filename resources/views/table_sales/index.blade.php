@extends('layouts.app')

@section('content')
div class="container">
    <table>
    <tr>
        <th>Acer<img src="/Acer.jpg" alt="">
    </th>
        <th>Dell<img src="/images.jpg" alt=""></th>
        <th>Asus<img src="/Asus.jpg" alt=""></th>
    </tr>
    <tr>
    <td>SALES</td>
    <td>SALES</td>
    <td>SALES</td>
    </tr>
    <tr>
        <th>150 Pieces</th>
        <th>200 Pieces</th>
        <th> 100 Pieces</th>
    </tr>
   
</table>
</div>
    </tr>
@endsection
<style>

table, th, td{
    border:100zpx black;
    padding:1px;
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


