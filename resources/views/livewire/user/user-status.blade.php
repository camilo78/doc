<div class="form-check form-switch">
    <label class="relative inline-flex items-center cursor-pointer">
        <input wire:model.lazy="isActive" type="checkbox" role="switch" @if ($isActive) checked @endif
            class="sr-only peer disabled">
        <div
            class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
        </div>
        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Toggle me</span>
    </label>
</div>
