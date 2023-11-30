<div>
<h1>Today's date is {{$date}}</h1>
</div>

<h2>The UTC time is {{$time}}</h2>
{{-- 
@if($time >= 12 and $time <= 16)
    <h3>Good afternoon!</h3>
@elseif($time >= 16 and $time <= 19)
    <h3>Good evening!</h3>
@elseif($time >= 19 and $time <=4)
    <h3>Good night!</h3>
@else
    <h3>Good morning!</h3>
@endif --}}

@switch($time)
    @case($time>=4 && $time <12)
        <h2>Good Morning</h2>
        @break
    @case($time>=12 && $time <16)
        <h2>Noon!</h2>
        @break
    @case($time>=16 && $time <19)
        <h2>Good Ebening, Mr Emery</h2>
        @break
    @case($time>=19 && $time <4)
        <h2>Good night</h2>
        @break
@endswitch