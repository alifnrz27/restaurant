<div class="relative flex flex-col gap-2 mb-4">
    <label class="font-bold text-[16px]" for="{{ $id }}">{{ $label }}</label>
    <input type="{{ $type ?? 'text' }}" id="{{ $id }}" name="{{ $name }}" class="w-full border rounded-lg h-[40px] px-4" placeholder="{{ $placeholder ?? 'Masukkan data' }}">
    @error('{{ $name }}')
        <div class="absolute -bottom-5 left-2 text-[12px] text-red-500">{{ $message }}</div>
    @enderror
</div>
