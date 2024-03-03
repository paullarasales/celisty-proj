@extends('main-page')

@section('page_title', 'Main View')

@section('content')
<div class="flex flex-col items-start justify-around h-11/12 w-96 p-8 rounded-lg shadow-md max-w-md w-full">
    <form method="POST" action="{{ route('create')}}">
        @csrf
        <div class="flex flex-row justify-evenly w-80">
            <div class="mb-4">
                <label for="title" class="text-2xl font-semibold tracking-wide">What's up love</label>
                <input type="text" id="title" name="title" class="w-11/12 px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Rant Here">
            </div>
            <div class="flex items-center justify-center w-12">
                <button type="submit" class="text-white bg-black h-10 w-10 px-4 py-2 mt-3 rounded-lg hover:bg-blue-600 transition-colors duration-300 w-72 flex items-center justify-center added-transition">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z" />
                    </svg>
                </button>
            </div>
        </div>
    </form>

    <div class="flex flex-col items-center justify-center w-96 gap-2">
        @foreach ($rant as $rants) 
            <div class="flex items-center justify-evenly gap-2 w-full h-14 bg-white rounded-lg shadow-md">
                <div class="flex items-center justify-start w-11/12 h-full px-4 py-2">
                    <h1 class="text-black font-normal">{{$rants->title}}</h1>
                </div>
                <div class="flex items-end justify-center w-3/6 h-full">
                    <a href="{{ route('destroy', ['rantid' => $rants->id])}}" onclick="event.preventDefault();
                        document.getElementById('delete-btn{{ $rants->id }}').submit();">
                        <button type="button" class="text-red-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                          </svg>
                        </button>
                    </a>           
                    <form id="delete-btn{{ $rants->id }}" action="{{ route('destroy', ['rantid' => $rants->id]) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection