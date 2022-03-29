@extends('layouts.main')
@section('head')
<link href='/css/app.css' type='text/css' rel='stylesheet'>
@endsection

@section('content')
<form action="/process" method="POST">
    {{ csrf_field() }}
     
    <label for="name"> Drink that you want</label>
    <input type="text" name="drink" id="name" value="{{old('drink',$drink)}}" >
    <br>
    <div class="row">
    <label for="ingredient"> Special ingredient you want </label>
    <select name="ingredient" id="ingredient">
        <option  value=""> Select One </option>
          
        <option {{(old('ingredient',$ingredient) == "meat" ? 'selected':'')}}  value="meat"> Meat </option>
        <option {{(old('ingredient',$ingredient) == "vegetable" ? 'selected':'') }} value="vegetable"> Vegetable </option>
        <option {{(old('ingredient',$ingredient) =="fruit" ? 'selected':'') }} value="fruit"> Fruit </option>
        <option {{(old('ingredient',$ingredient) =="dairy" ? 'selected':'') }} value="dairy"> Dairy </option>
        <option {{(old('ingredient',$ingredient) =="grain" ? 'selected':'') }} value="grain"> Grain </option>
        <option {{(old('ingredient',$ingredient) =="other" ? 'selected':'') }} value="other"> Other </option>
       
       
        {{-- <option  value="meat"> Meat </option>
        <option value="vegetable"> Vegetable </option>
        <option  value="fruit"> Fruit </option>
        <option  value="dairy"> Dairy </option>
        <option  value="grain"> Grain </option>
        <option  value="other"> Other </option> --}}
        {{-- @endif --}}
    </select>
    </div>
        <fieldset>
            <label for="flavor">
                Want Spicy?
            </label>
            <input type='radio' name='spicy' id='spicy' value='spicy' {{old('spicy','spicy')== 'spicy'? 'checked':''}}>
            <label for='spicy'> Spicy</label>
        
            <input  type='radio' name='spicy'  id='notspicy' value='notspicy' {{old('spicy',$spicy)== 'notspicy'? 'checked':''}}>
            <label for='notspicy'>Not Spicy</label>
        </fieldset>

   
    <input type="submit" value="Submit">
</form>
@if(count($errors) > 0)
    <ul class='alert'>
        @foreach ($errors->all() as $error)
            <li for="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif

@if($food)
<ul class="list-group">
    <li>Drink: {{$drink}}</li>
    <li>Ingredient: {{$ingredient}}</li>
    <li>Meal Flavor: {{$spicy}}</li>
    <li>Food Choosen: {{$food[0]['name']}}</li>
    <li>Food description: {{$food[0]['description']}}</li>
</ul>
@endif
@endsection
