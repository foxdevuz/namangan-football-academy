<x-admin.index-layout>
    <form action="/admin/storeCoach/u-12" method="post" enctype="multipart/form-data">
        @csrf
        <p class="text-center">U12 klubi uchun boshqaruv | Murabbiy qo'shish</p>
        <label for="coach" class="form-label">Murabbiy</label>
        <input type="text" name="coach" id="coach" placeholder="Murabbiy" required autocomplete="off" class="form-control">

        <label for="birthday" class="form-label mt-5">Murabbiy tug'ilgan kuni</label>
        <input type="text" name="birthday" id="birthday" placeholder="Murabbiy tug'ilgan kuni" required autocomplete="off" class="form-control">

        <label for="licence" class="form-label mt-5">Litsenziyasi</label>
        <input type="text" name="licence" id="licence" placeholder="Litsenziya" required autocomplete="off" class="form-control">

        <label for="bg" class="form-label mt-5">Murabbiy rasmi</label>
        <input type="file" name="file" id="bg" required class="form-control">
        <button class="btn btn-primary rounded mt-5" type="submit">Joylash</button>
    </form>

    {{-- adding club members --}}
    <form action="/admin/storeStudents/u-12" method="post" enctype="multipart/form-data" class="mt-5">
        @csrf
        <p class="text-center mt-5">U12 klubi uchun boshqaruv | O'quvchi qo'shish</p>
        <label for="student" class="form-label">O'quvchi</label>
        <input type="text" name="student" id="student" placeholder="O'quvchi ismi" required autocomplete="off" class="form-control">

        <label for="student_position" class="form-label mt-5">Pozitsiyasi</label>
        <input type="text" name="student_position" id="student_position" placeholder="O'quvchi Pozitsiyasi" required autocomplete="off" class="form-control">

        <label for="birthday" class="form-label mt-5">O'quvchi tug'ilgan kuni</label>
        <input type="text" name="birthday" id="birthday" placeholder="Murabbiy tug'ilgan kuni" required autocomplete="off" class="form-control">

        <label for="bg" class="form-label mt-5">O'quvchi rasmi</label>
        <input type="file" name="file" id="bg" required class="form-control">
        <button class="btn btn-primary rounded mt-5" type="submit">Joylash</button>
    </form>
</x-admin.index-layout>
