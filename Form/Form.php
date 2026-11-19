<?php
$pageTitle = "หน้าแรก - MyWebsite";
include __DIR__ . '/Includef/header.php';
include __DIR__ . '/Includef/navbar.php';
?>

<form
  x-data="{ ... }"
  class="max-w-3xl mx-auto space-y-4 bg-white p-8 rounded-2xl shadow-lg border border-gray-100"
  @submit.prevent="..."
>
<!-- หัวฟอร์ม -->
  <h1 class="text-3xl font-bold text-center">รายงานการบำเพ็ญประโยชน์</h1>
  <p class="text-center text-gray-600">รายงานการบำเพ็ญประโยชน์</p>

<div class="group">
    <label for="fname" class="font-medium whitespace-nowrap">ด้วย ข้าพเจ้า</label>
    <input type="text" id="fname" name="fname"
           x-model="contactName" required maxlength="80"
           class="flex-1 min-w-0 border border-gray-400 rounded-lg px-3 py-2
                  focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">

    <label for="lname" class="font-medium whitespace-nowrap">นามสกุล</label>
    <input type="text" id="lname" name="lname"
           x-model="contactSurname" required maxlength="80"
           class="flex-1 min-w-0 border border-gray-400 rounded-lg px-3 py-2
                  focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
</div>

<div class="group">
    <label for="id_stu" class="font-medium whitespace-nowrap">รหัสนักศึกษา</label>
    <input type="text" id="id_stu" name="id_stu"
           x-model="contactName" required maxlength="10"
           class="flex-1 min-w-0 border border-gray-400 rounded-lg px-3 py-2
                  focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
    <label for="id_Major" class="font-medium whitespace-nowrap">คณะ</label>
    <select id="id_Major" name="id_Major"
        x-model="contactMajor" required
        class="flex-1 min-w-0 border border-gray-400 rounded-lg px-3 py-2 bg-white
              focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">

        <option value="" disabled selected>-- เลือกคณะ --</option>
        <option value="คณะเทคโนโลยีการเกษตร">คณะเทคโนโลยีการเกษตร</option>
        <option value="คณะครุศาสตร์">คณะครุศาสตร์</option>
        <option value="คณะนิติศาสตร์">คณะนิติศาสตร์</option>
        <option value="คณะนิเทศศาสตร์">คณะนิเทศศาสตร์</option>
        <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
        <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
        <option value="คณะเทคโนโลยีดิจิทัล">คณะเทคโนโลยีดิจิทัล</option>
        <option value="คณะวิทยาการจัดการ">คณะวิทยาการจัดการ</option>
        <option value="คณะวิทยาศาสตร์และเทคโนโลยี">คณะวิทยาศาสตร์และเทคโนโลยี</option>
        <option value="คณะวิศวกรรมศาสตร์และเทคโนโลยีอุตสาหกรรม">คณะวิศวกรรมศาสตร์และเทคโนโลยีอุตสาหกรรม</option>
</select>
</div>

<div class="group">
    <label for="id_department" class="font-medium whitespace-nowrap">สาขา</label>
    <input type="text" id="id_department" name="id_department"
           x-model="contactDepartment" required maxlength="10"
           class="flex-1 min-w-0 border border-gray-400 rounded-lg px-3 py-2
                  focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">

       <label for="num_tel" class="font-medium whitespace-nowrap">หมายเลขโทรศัพท์</label>
       <input type="tel" id="num_tel" name="num_tel"
       x-model="tel" required
       maxlength="10" minlength="10"                           
       pattern="[0-9]{10}"
       inputmode="numeric"
       placeholder="***-***-****"S
       title="กรุณากรอกเบอร์โทรศัพท์ 10 หลัก (ตัวเลขเท่านั้น)"
       @input="tel = tel.replace(/[^0-9]/g, '')"
       class="flex-1 min-w-0 border border-gray-400 rounded-lg px-3 py-2
       focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
<?php
  // type="tel"             = ช่องเบอร์โทร (มือถือจะเปิดแป้นโทรศัพท์)
  // id / name="num_tel"    = ตัวเชื่อม label / ชื่อที่ PHP ใช้รับค่า
  // x-model="tel"          = ผูกกับตัวแปร tel ใน x-data
  // required               = บังคับกรอก
  // maxlength="10"         = พิมพ์ได้ไม่เกิน 10 ตัว
  // minlength="10"         = ต้องพิมพ์ครบ 10 ตัวจึงส่งฟอร์มได้
  // pattern="[0-9]{10}"    = ต้องเป็นตัวเลข 0-9 จำนวน 10 หลักพอดี
  // inputmode="numeric"    = มือถือแสดงแป้นตัวเลข
  // placeholder            = ข้อความจางๆ ตัวอย่างในช่อง
  // title                  = ข้อความเตือนเมื่อกรอกผิดรูปแบบ
  // @input                 = ทุกครั้งที่พิมพ์ ตัดตัวที่ไม่ใช่ตัวเลขออกทันที
?>
</div>

<div class="group">
       <label for="place" class="font-medium whitespace-nowrap">ได้บำเพ็ญประโยชน์ ณ</label>
       <input type="text" id="place" name="place"
              x-model="contactPlace" required maxlength="100"
              class="flex-1 min-w-0 border border-gray-400 rounded-lg px-3 py-2
                     focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
</div>

<div class="group">
       <label for="date" class="font-medium whitespace-nowrap">ตั้งแต่วันที่</label>
       <input type="date" id="date" name="date"
              x-model="contactDate" required
              class="flex-1 min-w-0 border border-gray-400 rounded-lg px-3 py-2
                     focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">

       <label for="time" class="font-medium whitespace-nowrap">ตั้งแต่เวลา</label>
       <input type="text" id="time" name="time"
              x-model="contactTime" required maxlength="100"
              class="flex-1 w-32 border border-gray-400 rounded-lg px-3 py-2
                     focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">

       <label for="total_time" class="font-medium whitespace-nowrap">รวมเป็น</label>
       <input type="text" id="total_time" name="total_time"
              x-model="contactTotalTime" required maxlength="100"
              class="flex-1 w-32 border border-gray-400 rounded-lg px-3 py-2
                     focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
</div>

<div class="group">
       <label for="activity" class="font-medium whitespace-nowrap">มีลักษณะกิจกรรม ดังนี้</label>
       <input type="text" id="activity" name="activity"
              x-model="contactActivity" required maxlength="300"
              class="flex-1 w-128 border border-gray-400 rounded-lg px-3 py-2
                     focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
</div>

<div class="grid grid-cols-2 gap-4">

  <!-- กรอบที่ 1 -->
  <div class="aspect-video border-2 border-gray-300 rounded-lg overflow-hidden bg-gray-50">
    <img src="/img/photo1.jpg" alt="ภาพที่ 1" class="w-full h-full object-cover">
  </div>

  <!-- กรอบที่ 2 -->
  <div class="aspect-video border-2 border-gray-300 rounded-lg overflow-hidden bg-gray-50">
    <img src="/img/photo2.jpg" alt="ภาพที่ 2" class="w-full h-full object-cover">
  </div>

</div>

</div>
<button type="submit"
          class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
    ส่งข้อมูล
  </button>
</form>

<?php include __DIR__ . '/Includef/footer.php'; ?>