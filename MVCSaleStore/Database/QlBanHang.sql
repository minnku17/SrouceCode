Use master
Drop Database QlCuaHang
Create Database QlCuaHang
Go
Use QlCuaHang
Go
--Drop table KhachHang
--Go
Create Table KhachHang
(
	MaKH	Int	Identity(1,1),
	HoTen	Nvarchar(50)	Not Null,
	TaiKhoan	Varchar(50)	Unique,
	MatKhau	Varchar(50)	Not Null,
	Email	Varchar(100)	Unique,
	DiachiKH	Nvarchar(200),
	DienThoaiKH	Varchar(50),
	NgaySinh	DateTime,
	Constraint	Pk_KhachHang Primary Key(MaKH)
)
Go
--Drop table Loai Thuc Pham
--Go
Create Table LoaiThucPham
(
	MaLoaiThucPham	Int	Identity(1,1),
	TenLoai	Nvarchar(50)	Not Null,
	Constraint Pk_LoaiThucPham Primary Key(MaLoaiThucPham)
)
Go
--Drop table NhaCungCap
--Go
Create Table NhaCungCap
(
	MaCungCap	Int Identity(1,1),
	TenNhaCungCap	Nvarchar(50)	Not Null,
	DiaChi	Nvarchar(200),
	Constraint	Pk_NhaCungCap Primary Key(MaCungCap),
)
Go
--Drop table ThucPham
--Go
Create Table ThucPham
(
	MaThucPham	Int	Identity(1,1),
	TenThucPham	Nvarchar(100)	Not Null,
	GiaBan	Decimal(18,0)	Check(GiaBan>=0),
	MoTa	Nvarchar(Max),
	AnhBia	Varchar(50),
	NgayCapNhat	DateTime,
	SoLuongTon	Int,
	MaLoaiThucPham	Int,
	MaCungCap		Int,
	Constraint	Pk_ThucPham	Primary Key(MaThucPham),
	Constraint	Fk_LoaiThucPham	Foreign	Key(MaLoaiThucPham) References LoaiThucPham(MaLoaiThucPham),
	Constraint	Fk_NhaCungCap	Foreign Key(MaCungCap) References NhaCungCap(MaCungCap)
)
Go
--Drop table DonDatHang
--Go
Create Table DonDatHang
(
	SoDH	Int Identity(1,1),
	MaKH	Int,
	NgayDH	DateTime,
	NgayGiao	DateTime,
	DaThanhToan	Bit,
	TinhTrangGiaoHang	Bit,
	Constraint	Pk_DonDatHang	Primary Key(SoDH),
	Constraint	Fk_KhachHang	Foreign	Key(MaKH)	References	KhachHang(MaKH)
)
Go
--Drop table ChiTietDatHang
--Go
Create Table	ChiTietDatHang
(
	SoDH	Int,
	MaThucPham	Int,
	SoLuong	Int	Check(SoLuong>0),
	DonGia Decimal(18,0)	Check(DonGia>=0),
	Constraint	Pk_ChiTietDatHang	Primary Key(SoDH,MaThucPham),
	Constraint	Fk_DonHang	Foreign	Key(SoDH)	References	DonDatHang(SoDH),
	Constraint	Fk_ThucPham	Foreign Key(MaThucPham)	References	ThucPham(MaThucPham)
)
Go
--Drop table Admin
--Go
Create table Admin
(
	UserAdmin varchar(30) primary key,
	PassAdmin varchar(30) not null,
	Hoten nVarchar(50)
)
--Thêm dữ liệu:
---Loại thực phẩm
	Insert into LoaiThucPham Values (N' Rau')
	Insert into LoaiThucPham Values (N' Củ')
	
	Insert into LoaiThucPham Values (N' Thịt')
	Insert into LoaiThucPham Values (N' Cá')
select *from LoaiThucPham
---Nha cung cap
	Insert into NhaCungCap values (N' Công ty cung cấp rau củ quả Thực Phẩm Đồng Xanh',N'VietNam')
	Insert into NhaCungCap values (N' Công Ty TNHH MTV Nông Lâm Sản Thành Nam',N'Anh')
	Insert into NhaCungCap values (N' Công Ty TNHH Một Thành Viên Rau Củ Quả Thanh Hà',N'VietNam')
	Insert into NhaCungCap values (N' Nông Sản Dũng Hà - Công Ty TNHH Nông Sản Dũng Hà',N'VietNam')
select * from NhaCungCap
--Dữ liệu người dùng
	Insert into KhachHang values (N'Lê Thanh Phương',N'Rust',N'1234',N'thanhphuong25102010@gmail.com',N'Quận 12',N'0933087958',N'2001/10/25')
select *from KhachHang
---Xe
	Insert into ThucPham values (N' Rau Muống',7000,N' Rau muống tươi xanh',' RauMuong.png','05/04/2012',50,2,2)
	Insert into ThucPham values (N' Thịt Heo',70000,N' Thịt heo tươi ngon',' ThitHeo.jpg','01/04/2016',17,2,1)
	Insert into ThucPham values (N' Cá biển',30000,N' Cá biển siêu ngon',' CaBien.jpg','09/14/2021',17,3,3)
	Insert into ThucPham values (N' Thịt bò',150000,N'Bò mộng nước',' ThitBo.png','05/04/2021',17,1)
	
select * from ThucPham
--Dữ liệu Admins
Insert into Admin values('admin','123456','Trương Thanh hòa')
Insert into Admin values('user','654321','Duy')
select *from Admin
