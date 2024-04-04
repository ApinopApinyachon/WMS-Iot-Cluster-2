@extends('layouts.default')
@section('title', 'ดูภาพรวมคลังสินค้าอื่น')

@section('content')
<div style="height: calc(100vh - 4rem)" class="bg-[#F6F9FC] border w-full flex flex-col h-full">
    <div class="mt-[5rem] md:mt-0">
        <div class=" w-full h-[3rem] ">
            <div class="h-full flex items-center bg-white p-3 border-b-2 shadow-sm text-blue-800">
                <a href="">แดชบอร์ด > ดูคลังสินค้าอื่น > {{ $warehouses->wh_name }}</a>
            </div>
        </div>
        <div class="w-full p-2">
            <div style="height: calc(100vh - 7.7rem)"
                class=" border border-black rounded-sm  bg-white overflow-y-scroll">

                <div>
                    <h1>YOUR CODE HERE</h1>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
