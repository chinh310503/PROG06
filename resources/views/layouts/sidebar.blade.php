<div class="sidebar hidden sm:block w-0 sm:w-1/6 bg-gray-200 h-screen shadow fixed top-0 left-0 bottom-0 z-40 overflow-y-auto">
    <div class="mb-6 mt-20 px-6">
        <a href="{{ route('home') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-4 w-4 fill-current feather feather-grid" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
            <span class="ml-2 text-sm font-semibold">Dashboard</span>
        </a>
        @role('Teacher')
        
        <a href="{{ route('teacher.index') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-4 w-4 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-edit" class="svg-inline--fa fa-user-edit fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h274.9c-2.4-6.8-3.4-14-2.6-21.3l6.8-60.9 1.2-11.1 7.9-7.9 77.3-77.3c-24.5-27.7-60-45.5-99.9-45.5zm45.3 145.3l-6.8 61c-1.1 10.2 7.5 18.8 17.6 17.6l60.9-6.8 137.9-137.9-71.7-71.7-137.9 137.8zM633 268.9L595.1 231c-9.3-9.3-24.5-9.3-33.8 0l-37.8 37.8-4.1 4.1 71.8 71.7 41.8-41.8c9.3-9.4 9.3-24.5 0-33.9z"></path></svg>
            <span class="ml-2 text-sm font-semibold">Danh sách giáo viên</span>
        </a>
        <a href="{{ route('student.index') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-4 w-4 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-graduate" class="svg-inline--fa fa-user-graduate fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M319.4 320.6L224 416l-95.4-95.4C57.1 323.7 0 382.2 0 454.4v9.6c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-9.6c0-72.2-57.1-130.7-128.6-133.8zM13.6 79.8l6.4 1.5v58.4c-7 4.2-12 11.5-12 20.3 0 8.4 4.6 15.4 11.1 19.7L3.5 242c-1.7 6.9 2.1 14 7.6 14h41.8c5.5 0 9.3-7.1 7.6-14l-15.6-62.3C51.4 175.4 56 168.4 56 160c0-8.8-5-16.1-12-20.3V87.1l66 15.9c-8.6 17.2-14 36.4-14 57 0 70.7 57.3 128 128 128s128-57.3 128-128c0-20.6-5.3-39.8-14-57l96.3-23.2c18.2-4.4 18.2-27.1 0-31.5l-190.4-46c-13-3.1-26.7-3.1-39.7 0L13.6 48.2c-18.1 4.4-18.1 27.2 0 31.6z"></path></svg>
            <span class="ml-2 text-sm font-semibold">Danh sách sinh viên</span>
        </a>
        <a href="{{ route('message.index',auth()->user()->id ) }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-4 w-4 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 7.9 6.3 17.3 11.2 27.3 14.6l184 61.3c3.9 1.3 8.1 1.3 12 0l184-61.3c10-3.3 19.4-8.3 27.3-14.6zm-35.4-28.8c-7.6 6-16.4 10-25.9 12.3L256 248l-185.1-61.7c-9.5-2.3-18.3-6.4-25.9-12.3-8.2-6.5-13.1-16.3-13.1-26.7V400c0 17.7 14.3 32 32 32h416c17.7 0 32-14.3 32-32V135.1c0 10.4-4.9 20.2-13.1 26.7z"></path></svg>
            <span class="ml-2 text-sm font-semibold">Tin nhắn</span>
        </a>
        <a href="{{ route('homework.index') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-4 w-4 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="book-open" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M500 64h-36c-9.6 0-17.8 6.4-20.4 15.6L360.1 448H216.1L136.4 79.6c-2.7-9.2-10.8-15.6-20.4-15.6H80c-26.5 0-48 21.5-48 48v320c0 26.5 21.5 48 48 48h36c9.6 0 17.8-6.4 20.4-15.6L157.9 64h103.9l79.7 368.4c2.7 9.2 10.8 15.6 20.4 15.6h36c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zm-368 32c-8.8 0-16 7.2-16 16v256c0 8.8 7.2 16 16 16h12.6l61.4 284.4 60.9-284.4h12.7c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H132z"></path></svg>
            <span class="ml-2 text-sm font-semibold">Bài tập</span>
        </a>
        <a href="{{ route('challenge.teacher') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-4 w-4 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trophy" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M508.5 32.05L430.34 7.21c-15.02-3.42-28.89 7.51-28.89 22.95v91.65c0 7.1-5.76 12.86-12.86 12.86H187.41c-7.1 0-12.86-5.76-12.86-12.86V30.07c0-15.45-13.87-26.37-28.89-22.95l-78.15 24.84c-10.34 3.28-16.82 13.02-15.37 23.59l17.28 131.7H64c-35.35 0-64 28.65-64 64v16c0 8.84 7.16 16 16 16h48v224c0 35.35 28.65 64 64 64h256c35.35 0 64-28.65 64-64V272h48c8.84 0 16-7.16 16-16v-16c0-35.35-28.65-64-64-64h-47.37l17.27-131.7c1.45-10.57-5.03-20.31-15.37-23.59zM512 272H400v-64c0-17.67-14.33-32-32-32h-96c-17.67 0-32 14.33-32 32v64H64c-8.84 0-16-7.16-16-16V160h128v32c0 17.67 14.33 32 32 32h96c17.67 0 32-14.33 32-32v-32h256v112c0 8.84-7.16 16-16 16zm0 176H192V320h320v128z"></path></svg>
            <span class="ml-2 text-sm font-semibold">Challenge</span>
        </a>
        @endrole
        
        @role('Student')
        
        <a href="{{ route('info.ViewTeacher') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-4 w-4 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-edit" class="svg-inline--fa fa-user-edit fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h274.9c-2.4-6.8-3.4-14-2.6-21.3l6.8-60.9 1.2-11.1 7.9-7.9 77.3-77.3c-24.5-27.7-60-45.5-99.9-45.5zm45.3 145.3l-6.8 61c-1.1 10.2 7.5 18.8 17.6 17.6l60.9-6.8 137.9-137.9-71.7-71.7-137.9 137.8zM633 268.9L595.1 231c-9.3-9.3-24.5-9.3-33.8 0l-37.8 37.8-4.1 4.1 71.8 71.7 41.8-41.8c9.3-9.4 9.3-24.5 0-33.9z"></path></svg>
            <span class="ml-2 text-sm font-semibold">Danh sách giáo viên</span>
        </a>
        <a href="{{ route('info.ViewStudent') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-4 w-4 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-graduate" class="svg-inline--fa fa-user-graduate fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M319.4 320.6L224 416l-95.4-95.4C57.1 323.7 0 382.2 0 454.4v9.6c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-9.6c0-72.2-57.1-130.7-128.6-133.8zM13.6 79.8l6.4 1.5v58.4c-7 4.2-12 11.5-12 20.3 0 8.4 4.6 15.4 11.1 19.7L3.5 242c-1.7 6.9 2.1 14 7.6 14h41.8c5.5 0 9.3-7.1 7.6-14l-15.6-62.3C51.4 175.4 56 168.4 56 160c0-8.8-5-16.1-12-20.3V87.1l66 15.9c-8.6 17.2-14 36.4-14 57 0 70.7 57.3 128 128 128s128-57.3 128-128c0-20.6-5.3-39.8-14-57l96.3-23.2c18.2-4.4 18.2-27.1 0-31.5l-190.4-46c-13-3.1-26.7-3.1-39.7 0L13.6 48.2c-18.1 4.4-18.1 27.2 0 31.6z"></path></svg>
            <span class="ml-2 text-sm font-semibold">Danh sách sinh viên</span>
        </a>
        <a href="{{ route('message.index',auth()->user()->id ) }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-4 w-4 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 7.9 6.3 17.3 11.2 27.3 14.6l184 61.3c3.9 1.3 8.1 1.3 12 0l184-61.3c10-3.3 19.4-8.3 27.3-14.6zm-35.4-28.8c-7.6 6-16.4 10-25.9 12.3L256 248l-185.1-61.7c-9.5-2.3-18.3-6.4-25.9-12.3-8.2-6.5-13.1-16.3-13.1-26.7V400c0 17.7 14.3 32 32 32h416c17.7 0 32-14.3 32-32V135.1c0 10.4-4.9 20.2-13.1 26.7z"></path></svg>
            <span class="ml-2 text-sm font-semibold">Tin nhắn</span>
        </a>
        <a href="{{ route('homework.studentindex') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-4 w-4 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="book-open" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M500 64h-36c-9.6 0-17.8 6.4-20.4 15.6L360.1 448H216.1L136.4 79.6c-2.7-9.2-10.8-15.6-20.4-15.6H80c-26.5 0-48 21.5-48 48v320c0 26.5 21.5 48 48 48h36c9.6 0 17.8-6.4 20.4-15.6L157.9 64h103.9l79.7 368.4c2.7 9.2 10.8 15.6 20.4 15.6h36c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zm-368 32c-8.8 0-16 7.2-16 16v256c0 8.8 7.2 16 16 16h12.6l61.4 284.4 60.9-284.4h12.7c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H132z"></path></svg>
            <span class="ml-2 text-sm font-semibold">Bài tập</span>
        </a>
        <a href="{{ route('challenge.student') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-4 w-4 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trophy" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M508.5 32.05L430.34 7.21c-15.02-3.42-28.89 7.51-28.89 22.95v91.65c0 7.1-5.76 12.86-12.86 12.86H187.41c-7.1 0-12.86-5.76-12.86-12.86V30.07c0-15.45-13.87-26.37-28.89-22.95l-78.15 24.84c-10.34 3.28-16.82 13.02-15.37 23.59l17.28 131.7H64c-35.35 0-64 28.65-64 64v16c0 8.84 7.16 16 16 16h48v224c0 35.35 28.65 64 64 64h256c35.35 0 64-28.65 64-64V272h48c8.84 0 16-7.16 16-16v-16c0-35.35-28.65-64-64-64h-47.37l17.27-131.7c1.45-10.57-5.03-20.31-15.37-23.59zM512 272H400v-64c0-17.67-14.33-32-32-32h-96c-17.67 0-32 14.33-32 32v64H64c-8.84 0-16-7.16-16-16V160h128v32c0 17.67 14.33 32 32 32h96c17.67 0 32-14.33 32-32v-32h256v112c0 8.84-7.16 16-16 16zm0 176H192V320h320v128z"></path></svg>
            <span class="ml-2 text-sm font-semibold">Challenge</span>
        </a>
        @endrole
    </div>
</div>