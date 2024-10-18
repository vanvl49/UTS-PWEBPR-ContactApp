@extends('layouts.app')

@section('title','ContactApp')

@section('content')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 my-10">
    <table class="w-full text-sm text-left rtl:text-right text-black">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-pink-400 bg-white">
            Welcome to ContactApp!
            <p class="mt-1 text-sm font-normal text-black">Stay connected and organized with our contact table—effortless communication made easy, ensuring you never miss an important connection!</p>
        </caption>
        <thead class="text-xs text-white uppercase bg-pink-400 dark:bg-pink-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr class="bg-white border-b hover:bg-pink-100 text-black">
                <td class="px-6 py-4">
                    {{ $loop->iteration }}
                </td>
                <td class="px-6 py-4 font-bold">
                    {{ $contact["nama"] }}
                </td>
                <td class="px-6 py-4">
                    {{ $contact["nohp"] }}
                </td>
                <td class="px-6 py-4">
                    {{ $contact["email"] }}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-pink-400 hover:underline">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection