@csrf()
<div class="sm:col-span-4">
    <br />
    <label class="block text-sm font-medium leading-6 text-gray-900">Assunto</label>
    <div class="mt-2">
    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
        <input type="text" name="subject" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Assunto" value="{{$support->subject ?? old('subject')}}">
    </div>
    </div>
</div>
<div class="sm:col-span-4">
    <br />
    <label class="block text-sm font-medium leading-6 text-gray-900">Descrição</label>
    <div class="mt-2">
    <textarea id="about" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        {{$support->body ?? old('body')}}
    </textarea>
    </div>
</div>
<div>
    <div class="mt-3">
        <button type="submit" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Enviar</button>
    </div>
</div>