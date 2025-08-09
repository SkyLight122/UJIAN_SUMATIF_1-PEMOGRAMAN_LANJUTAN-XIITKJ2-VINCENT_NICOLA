

<style>
    .borderss{
        
        padding: 10px 10px 20px 20px;
        border-radius: 10px;
        width: 500px;
        margin: 0px 57px 30px 57px;
        height: fit-content;
        background-color: #dbeafe; /* Biru muda yang jelas */
        border: 1px solid #93c5fd;
        box-shadow: 0 2px 8px rgba(59, 130, 246, 0.15);
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .borderss:hover{
        border-radius: 10px;
        width: 500px;
        height: fit-content;
        background-color: #93c5fd; /* Biru medium yang soft */
        border: 1px solid #60a5fa;
        box-shadow: 0 6px 20px rgba(147, 197, 253, 0.3);
        transform: translateY(-2px);
    }
    .borderss:hover * {
        color: #1e3a8a; !important; /* Semua elemen jadi warna ini */
    }
    .header{
        display: flex;
    }
    .photoprofile{
        width: 70px;
        height: 70px;
        border-radius: 100px;
        background-color: gray;
        margin-right: 20px;
        margin-top: 10px;
        object-fit: cover;
        object-position: center;
    }
    .profile{
        margin-top: 20px;
    }
    .username{
        font-size: 13px;
        color: gray;
    }
    .footers{
        display: flex;
        flex-wrap: wrap;
        padding-top: 5px;
    }
    .content{
        font-size: 14px;
        color: black;
    }
</style>

<a href="{{ route('students.show', $id) }}" class="borderss">
    <div class="header">
        <img src="{{ $foto }}" class="photoprofile">
        <div class="profile">
            <p class="nama">{{ $nama }}</p>
            <p class="username">{{ "@".$username }}</p>
        </div>
    </div>
    <div class="footers">
        <p class="content">{{ $deskripsi }}</p>
    </div>
</a>
