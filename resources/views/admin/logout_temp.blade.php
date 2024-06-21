
    @if(LogData::where([['doctor_id','=', session()->get('id')]])->first())
    @php

        $ld=LogData::where([['doctor_id','=', session()->get('id')]])->get();
        $ld->toQuery()->update([
            'status' => "Offline",
        ]);//update and save any data
    @endphp

    @endif
@php

    session()->forget('id');
    session()->forget('name');
    session()->forget('role');
    session()->forget('url');

    // return redirect('/official');
@endphp

