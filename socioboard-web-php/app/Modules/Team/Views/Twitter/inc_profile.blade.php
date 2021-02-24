<div class="shadow mb-5 bg-white twt-card rounded">
    <div class="card-body">
                <span class="card_social_ribbon">
                  <i class="fab fa-twitter"></i>
                </span>


        <div class="text-center">
            <img class="rounded-circle card-avatar" src="{{ $userProfile->profile_pic_url }}" alt="Avatar" />
            <h5 class="card-title no-space">{{$userProfile->first_name}} {{$userProfile->last_name}}</h5>
            <p class="card-text">{{ @$userProfile->bio_text }}</p>
        </div>
        <div class="row">

            <div class="col-md-6">
                <div class="text-center">
                    <h5>{{ (integer)@$userProfile->follower_count }}</h5>
                    <h6>Follower</h6>
                </div>
            </div>

            <div class="col-md-6">
                <div class="text-center">
                    <h5>{{ (integer)@$userProfile->following_count }}</h5>
                    <h6>Following</h6>
                </div>
            </div>

        </div>
    </div>
    <div class="card-footer bg-transparent">
        <a href="#" class="btn btn-outline-dark col-md-12 margin-top-10" >View Reports</a>
    </div>
</div>