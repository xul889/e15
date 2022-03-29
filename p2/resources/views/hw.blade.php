@extends('layouts.main')
@section('head')
<link href='/css/app.css' type='text/css' rel='stylesheet'>
@endsection

@section('content')
<form action="index.php" method="post">
    <div class="row">
    <label for="name"> Drink that you want</label>
    <input type="text" name="name" id="name">
    </div>
    <label for="ingredient"> Special ingredient you want </label>
    <select name="ingredient" id="ingredient">
        <option value=""> Select One </option>
        <option value="meat"> Meat </option>
        <option value="vegetable"> Vegetable </option>
        <option value="fruit"> Fruit </option>
        <option value="dairy"> Dairy </option>
        <option value="grain"> Grain </option>
        <option value="other"> Other </option>
    </select>
    <div class="row">
        <label for="spicy"> Spicy </label>
     <input type="checkbox" name="spicy" id="spicy" value="YES">
    </div>
   
    <input type="submit" value="Submit">
</form>
@endsection
