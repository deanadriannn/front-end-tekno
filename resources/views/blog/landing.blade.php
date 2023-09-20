<x-app-layout>
  <x-slot name="header">
    <div class="fixed-top">
      <x-navigation />
    </div>
  </x-slot>

  <section class="mx-5" id="featured-posts">
    <div class="row">
      <div class="col-4">
        <h3><b>Read our most featured posts</b></h3>
      </div>
      <div class="col-8">
        <hr id="hr-landing">
      </div>
    </div>
    <x-carousel :posts='$posts' />
  </section>

  <section class="mx-5 mt-5" id="further-reading">
    <div class="row g-0">
      <div class="col-3">
        <h3><b>For your further reading</b></h3>
      </div>
      <div class="col-9 ps-4">
        <hr id="hr-landing">
      </div>
    </div>

    <div class="row row-cols-2 mt-2 gx-5 gy-2">
      @foreach($furtherPosts as $post)
        <div class="col-6">
          <x-further-reading-card :post='$post' />
        </div>
      @endforeach
    </div>
  </section>
</x-app-layout>