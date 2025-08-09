@props(['photo', 'username', 'nama', 'kelas', 'hobi', 'deskripsi', 'foto'])

<style>
    .borders{
        display: flex;
        justify-content: center;
        align-content: center;
    }
    .content{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .photo{
        border-radius: 100px;
        height: 200px;
        width: 200px;
        margin-bottom: 20px;
        object-fit: cover;
        object-position: center;
    }
    .usernameSiswa{
        align-items: center;
        justify-content: center;
        align-self: center;
        color: rgba(128, 128, 128, 0.64);
        font-weight: bold;
        font-size: 14px;
        color: #64748b;
    }
    .nama{
        font-size: 28px;
        font-weight: bold;
        color: #1e293b;
    }
    .kelasHobi{
        font-size: 16px;
        color: #475569;
    }
    .deskripsi{
        font-size: 16px;
        color: #334155;
    }
</style>

<div class="borders">
    <div class="content">
        <img src="{{ $foto }}" class="photo">
        <p class="usernameSiswa">{{ "@".$username }}</p>
        <p class="nama">{{ $nama }}</p>
        <p class="kelasHobi">{{ $kelas." | ".$hobi }}</p>
        <p class="deskripsi">{{ $deskripsi }}</p>
        <div>
            <x-button color="#3b82f6">Edit Profile</x-button>
            <x-button color="#ef4444">Delete Account</x-button>
        </div>
    </div>
    
</div>