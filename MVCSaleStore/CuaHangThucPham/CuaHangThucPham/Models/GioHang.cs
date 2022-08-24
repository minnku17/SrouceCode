using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace CuaHangThucPham.Models
{
    public class GioHang
    {
        dbQlCuaHangDataContext db = new dbQlCuaHangDataContext();
        //Tao 1 doi tuong chua toan bo csdl tu dlQLBansach
     

        public int iMaThucPham { set; get; }
        public String sTenThucPham { set; get; }
        public String sAnhBia { set; get; }
        public double dDonGia { set; get; }
        public int iSoLuong { set; get; }
        public double dThanhTien
        {
            get { return iSoLuong * dDonGia; }
        }
        public GioHang(int MaThucPham)
        {
            iMaThucPham = MaThucPham;
            ThucPham thucpham = db.ThucPhams.Single(n => n.MaThucPham == iMaThucPham);
            sTenThucPham = thucpham.TenThucPham;
            sAnhBia = thucpham.AnhBia;
            dDonGia = double.Parse(thucpham.GiaBan.ToString());
            iSoLuong = 1;
        }
    }
}