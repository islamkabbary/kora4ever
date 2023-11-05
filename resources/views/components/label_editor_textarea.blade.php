<style>
    .dark .tox-edit-area__iframe,
    .dark .tox-toolbar__primary,
    .dark .tox-menubar,
    .dark .tox-statusbar {
        background-color: #64748B !important;
    }
</style>

<div wire:ignore>
    {{-- <script src="https://cdn.tiny.cloud/1/rpf0suc6mruj0dq33onx7jgqjp8wshk8j10by05n8e2ka9b7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <script src="https://cdn.tiny.cloud/1/rpf0suc6mruj0dq33onx7jgqjp8wshk8j10by05n8e2ka9b7/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>

    <label for="{{ $name }}"
        class="mt-6 mt-2 mb-2 ml-1 font-bold text-white capitalize  @error("$name") border-2 border-[#F6A3A3] @enderror">{{ $title }}</label>
    <textarea name="{{ $name }}" rows="{{ $rows ?? '2' }}"
        wire:model.{{ $wire_option ?? 'defer' }}="{{ $name }}" placeholder="{{ $placeholder ?? '' }}"
        id="{{ $name }}"
        class="@error("$name") border-2 border-[#F6A3A3] @enderror
        focus:shadow-primary-outline border border-gray-300 bg-slate-850 placeholder:text-white/80 text-white/80 min-h-unset
        text-sm leading-5.6 ease block h-auto w-full appearance-none rounded-lg border border-solid border-gray-300
        bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500
        focus:border-blue-500 focus:outline-none {{ $class ?? '' }} tiny-text-area "></textarea>

</div>
<script>
    tinymce.init({
        selector: '.tiny-text-area',
        plugins: 'lists code directionality textcolor link',
        toolbar: 'code | numlist bullist | forecolor backcolor | ltr rtl | customInsertButton | undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link',
        codesample_languages: [{
                text: 'HTML/XML',
                value: 'html',
                name: 'HTML'
            },
            {
                text: 'JavaScript',
                value: 'javascript',
                name: 'JavaScript'
            },
            {
                text: 'CSS',
                value: 'css',
                name: 'CSS'
            },
        ],
    });

    function save_editor() {
        if (tinyMCE.activeEditor) {
            for ($i = 0; $i < tinyMCE.editors.length; $i++)
                @this.set(tinyMCE.editors[$i].getElement().id, tinyMCE.editors[$i].getContent());
        }
        Livewire.emit('add');
    }

    function postInitWork() {
        var editor = tinyMCE.getInstanceById($name);
        editor.getBody().style.backgroundColor = "#008000";
    }
</script>
