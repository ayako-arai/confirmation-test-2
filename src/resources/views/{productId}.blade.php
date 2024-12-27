@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/productId.css')}}">

@section('content')
<h1>商品詳細</h1>
<p>商品名：{{ $product->name }}</p>
<p>値段：{{ $product->price }}</p>
<p>説明文：{{ $product->description }}</p>
<p>商品写真：<img src="{{ $product->image }}" alt=""></p>

            <div class="btn-filed ml-auto">
                <a href="{{ route('productId.show', ['id' => $event->event_id]) }}" class="btn btn-primary mr-3">{{ '詳細' }}</a>
                <button class="btn btn-info mr-3">{{ '編集' }}</button>
                <button class="btn btn-danger mr-3">{{ '削除' }}</button>
            </div>