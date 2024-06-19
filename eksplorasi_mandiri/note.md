Berikut adalah langkah-langkah untuk setting SSH GitHub:

- Generate SSH Key:
  Buka terminal atau command prompt, kemudian jalankan perintah berikut untuk membuat SSH key baru:
```
ssh-keygen -t rsa -b 4096 -C "your_email@example.com"
```

- Save SSH Key:
  Ketikan *path* dimana key tersebut ingin disimpan, atau tekan **Enter** untuk menyimpan di lokasi tersebut

- Enter Passphrase:
  Masukan passphrase (opsional), biarkan *Blank* jika tidak ingin memakai paassphrase

- Add SSH Key to SSH Agent:
  Untuk memastikan ssh agent *running* ketik (akan return PID jika berjalan):
```
eval $(ssh-agent -s)
```
- Tambahkan SSH key Anda ke SSH agent:
```
ssh-add ~/.ssh/id_ed25519
```
ganti 'id_ed25519' dengan nama yang dimasukan sebelumnya

- Add SSH Key to GitHub:
    *Copy* konten dari file publik:
```
cat ~/.ssh/id_ed25519.pub
```
ganti 'id_ed25519' dengan nama yang dimasukan sebelumnya

- Buka GitHub, masuk ke Settings > SSH and GPG keys > New SSH key, kemudian *paste* isi konten yang sudah di *copy*

- Test SSH Connection:
Untuk memastikan semuanya bekerja, ketik:
```
ssh -T git@github.com
```
Jika *set-up* berhasil maka akan keluar pesan yang menyatakan berhasil.
