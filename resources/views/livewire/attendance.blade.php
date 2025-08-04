<div class="flex flex-col space-y-5">
    <div>
        <h1>
            Welcome to the attendance page
        </h1>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-base text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="w-full text-sm text-white uppercase bg-[#6d8055] border-b border-white dark:text-white">
                <tr>
                    <th scope="col" class="px-6 py-3">Time</th>
                    <th scope="col" class="px-6 py-3"> Date</th>
                    <th scope="col" class="px-6 py-3">Present</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entries as $entry)
                    <tr class="border-b text-white border-white bg-[#6d8055] border-b border-white">
                        <td scope="col" class="px-6 py-4 ">{{$entry->time}}</td>
                        <td scope="col" class="px-6 py-4">{{$entry->date}}</td>
                        <td scope="col" class="px-6 py-4">{{$entry->present}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
