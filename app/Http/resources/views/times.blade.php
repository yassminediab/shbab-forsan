<p class="font-weight-bold">
    لقد تم اختيار يوم
    {{ App\AppoinmetSchduale::WORKINGDAYAR[$dayNumber]}}
    الموافق
    {{ $date->format('d/m/Y') }}
     ميعاد كشفك الطبي من فضلك اختار وقت الزيارة
</p>
<ul class="mt-4 my-model px-4 py-4">
    <li>
        المواعيد المتاحة
    </li>

{{--    <li onclick="timeSelected('{{$time}}')">--}}
{{--        {{$time}}--}}
{{--    </li>--}}
        <div class="nav my-modal flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            @foreach($freeTime as $time)
            <a class="nav-link" onclick="timeSelected('{{$time}}')" id="{{$time}}"
               data-toggle="pill" role="tab" aria-controls="v-pills-home" aria-selected="true">
              من الساعة
                {{explode("-", $time)[1]}}

                إلى الساعة
                {{explode("-", $time)[0]}}
            </a>
            @endforeach
        </div>

</ul>
