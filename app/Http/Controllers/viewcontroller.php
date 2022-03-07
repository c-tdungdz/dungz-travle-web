<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\diemden;
use App\anuong;
use App\khachsan;
use App\vedem;
use App\phuongtien;
use App\muasam;
use App\cogimoi;
class viewcontroller extends Controller
{
    public function getmaster() {
        return view ('master.master');
    }

    // public function getdiadiem() {
    //     $api = diemden::get();
    //     //$json = response()->json($api,200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
    //     $link = str_replace("\/","/",$api);
    //     return $link;
    // }

    public function admin() {
        return view('dieukhien');
    }

    public function adddiadiem(){
        return view('add_diadiem');
    }

    public function editdiadiem() {
        return view('edit_diadiem');
    }

    public function showdiadiem() {
        $getdiadiem = diemden::all();
        return view('showdiadiem',compact('getdiadiem'));
    }


    public function postdata(Request $request) {
        $ten = $request->txt_diadiem;
        $vitri = $request->txt_vitri;
        $hinhanh = $request->txt_hinhanh;
        $thongtin = $request->txt_thongtin;
        $danhgia = $request->txt_danhgia;

        $diemden = new diemden;

        $diemden['ten'] = $ten;
        $diemden['vitri'] = $vitri;
        $diemden['hinhanh'] = $hinhanh;
        $diemden['thongtin'] = $thongtin;
        $diemden['danhgia'] = $danhgia;
        
        $diemden->save();
        $getdiadiem = diemden::all();
        return view('showdiadiem',compact('getdiadiem'));
    }

    public function update($id ) {

        $diemden = diemden::where('id',$id)->get();
        return view('edit_diadiem',compact('diemden'));
    }

    public function delete($id) {
        $diemden = diemden::find($id);
        $diemden->delete();
        $getdiadiem = diemden::all();
        return view('showdiadiem',compact('getdiadiem'));
    }

    public function postupdate(Request $request,$id) {

        $diemden = diemden::find($id);
        $ten = $request->txt_diadiem;
        $vitri = $request->txt_vitri;
        $hinhanh = $request->txt_hinhanh;
        $thongtin = $request->txt_thongtin;
        $danhgia = $request->txt_danhgia;

        $diemden['ten'] = $ten;
        $diemden['vitri'] = $vitri;
        $diemden['hinhanh'] = $hinhanh;
        $diemden['thongtin'] = $thongtin;
        $diemden['danhgia'] = $danhgia;
        $diemden->save();
        $getdiadiem = diemden::all();
        return view('showdiadiem',compact('getdiadiem'));

    }

    public function getdiadiem() {
        $diadiem = diemden::get();
        return $diadiem;
    }
    public function getanuong() {
        $anuong = anuong::get();
        return $anuong;
    }

    public function getkhachsan() {
        $khachsan = khachsan::get();
        return $khachsan;
    }

    public function getvedem() {
        $vedem = vedem::get();
        return $vedem;
    }
    public function getmuasam() {
        $muasam = muasam::get();
        return $muasam;
    }
    public function getphuongtien() {
        $phuongtien = phuongtien::get();
        return $phuongtien;
    }
    public function getcogimoi() {
        $cogimoi = cogimoi::get();
        return $cogimoi;
    }

}

