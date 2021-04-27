<div class="modal-content p-lg-5">
    <div class="modal-header border-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body text-center success">
        <i class="fas fa-check-circle fa-10x"></i>
        <h4 class="font-weight-bold mt-3">تم حجزك بنجاح</h4>
        <p class="font-weight-bold mt-2">
            لقد اخترت يوم
            {{ App\AppoinmetSchduale::WORKINGDAYAR[\Carbon\Carbon::parse($appointment->date)->dayOfWeek]  }}
            الموافق
            {{$appointment->date}}
            من الساعة
            {{ $appointment->time_from }}
            حتى الساعة
            {{ $appointment->time_to }}
        </p>
    </div>
</div>
