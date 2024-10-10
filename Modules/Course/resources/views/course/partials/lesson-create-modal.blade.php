<div class="modal-header">
    <h6 class="modal-title fs-5" id="">{{ __('Add Lesson') }}</h6>
</div>

<div class="">
    <form action="{{ route('admin.course-chapter.lesson.store') }}" method="POST"
        class="add_lesson_form instructor__profile-form">
        @csrf
        <input type="hidden" name="course_id" value="{{ $courseId }}">
        <input type="hidden" name="chapter_id" value="{{ $chapterId }}">
        <input type="hidden" name="type" value="{{ $type }}">

        <div class="">
            <div class="form-group">
                <label for="chapter">{{ __('Chapter') }} <code>*</code></label>
                <select name="chapter" id="chapter" class="chapter form-control">
                    <option value="">{{ __('Select') }}</option>
                    @foreach ($chapters as $chapter)
                        <option @selected($chapterId == $chapter->id) value="{{ $chapter->id }}">{{ $chapter->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="">
            <div class="form-grp">
                <label for="title">{{ __('Title') }} <code>*</code></label>
                <input id="title" name="title" type="text" value="" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-grp">
                    <label for="source">{{ __('Source') }} <code>*</code></label>
                    <select name="source" id="source" class="source form-control">
                        <option value="">{{ __('Select') }}</option>
                        @if($setting?->aws_status == 'active')
                            <option value="aws">{{ config('course.storage_source.aws') }}</option>
                        @endif
                        @foreach (config('course.storage_source') as $key => $value)
                            @if($key != 'aws' && $key != 'wasabi')
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endif
                        @endforeach
                        @if($setting?->wasabi_status == 'active')
                            <option value="wasabi">{{ config('course.storage_source.wasabi') }}</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-grp">
                    <label for="file_type">{{ __('File Type') }} <code>*</code></label>
                    <select name="file_type" id="file_type" class="file_type form-control">
                        <option value="">{{ __('Select') }}</option>
                        @foreach (config('course.file_types') as $key => $value)
                            @if (in_array($key, ['video', 'file', 'other']))
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-8 upload">
                <div class="from-group mb-3">
                    <label class="form-file-manager-label" for="">{{ __('Path') }}
                        <code>*</code></label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <a data-input="path" data-preview="holder" class="file-manager">
                                <i class="fa fa-picture-o"></i> {{ __('Choose') }}
                            </a>
                        </span>
                        <input id="path" readonly class="form-control file-manager-input" type="text"
                            name="upload_path" value="">
                    </div>
                </div>
            </div>
            <div class="col-md-12 cloud_storage d-none">
                <div class="from-group mb-3">
                    <label class="form-file-manager-label" for="">{{ __('Upload') }}</label>
                    <div class="input-group">
                        <div class="input-group">
                            <input id="file-input" type="file" class="form-control">
                            <button type="button" id="cloud-btn" class="input-group-text" id="basic-addon1"><i class="fas fa-upload"></i></button>
                        </div>
                    </div>
                    <div class="progress d-none">
                        <div class="progress-bar progress-bar-striped progress-bar-animated w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 link_path d-none">
                <div class="form-grp">
                    <label for="meta_description">{{ __('Path') }} <code></code></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-link"></i></span>
                        <input type="text" class="form-control" id="input_link" name="link_path"
                            placeholder="{{ __('pest source url') }}" value="">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="duration">{{ __('Duration') }} <code>* ({{ __('in minutes') }})</code></label>
                    <input class="form-control" id="duration" name="duration" type="text" value="">
                </div>
            </div>
        </div>

        <div class="">
            <div class="form-grp">
                <label for="description">{{ __('Description') }} <code></code></label>
                <textarea name="description" class="form-control"></textarea>
            </div>
        </div>

        <div class="row is_free_wrapper">
            <div class="col-md-6 mt-2">
                <span>{{ __('Preview') }}</span>
                <div class="switcher ms-3">
                    <label for="toggle-0">
                        <input type="checkbox" id="toggle-0" value="1" name="is_free" />
                        <span><small></small></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary submit-btn">{{ __('Create') }}</button>
        </div>
    </form>
</div>