<template>
    <div class="bg-white p-4 rounded-lg shadow-md">
        <input placeholder="Title..." class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 mb-3" type="text">
        <textarea class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4" placeholder="Create an article ..."></textarea>
        <div class="mt-4 flex justify-between">
            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">Publish</button>
            <div class="flex space-x-4">
                <label for="file-upload" class="text-gray-600 cursor-pointer">
                    Photo/Video
                </label>
                <input class=" hidden" id="file-upload" type="file"/>
            </div>
        </div>
    </div>
</template>