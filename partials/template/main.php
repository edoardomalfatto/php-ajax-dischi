    <main class="darkblue">
                <div class="diskboxs_container">
                    <div v-for="diskbox in diskBoxes" class="diskbox lightblue">
                        <div class="poster">
                            <img :src="diskbox.poster" alt="">
                        </div>
                        <div class="description">
                            <div class="title">
                                <h2>{{diskbox.title}}</h2>
                            </div>
                            <div class="author little_text">
                                <p>{{diskbox.author}}</p>
                            </div>
                            <div class="year little_text">
                                <p>{{diskbox.year}}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
