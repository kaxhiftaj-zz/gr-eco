<section id="search-box" class="no-margin">
    <div class="container search-container fixed-map">
        <div class="search-options">
            <span class="botton-options"><i class="fa fa-chevron-down"></i> Show Advanced Search</span>
            <div class="searcher">
                <div class="row margin-div">
                    <div class="col-sm-6 col-md-3 margin-bottom">
                        <input class="form-control" type="text" name="keywords" id="keywords" placeholder="Keywords" />
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <select class="dropdown" data-settings='{"cutOff": 5}'>
                            <option value="">-- All Cities --</option>
                            <option value="brixton">Brixton</option>
                            <option value="london">London</option>
                            <option value="middlesex">Middlesex</option>
                            <option value="stratford">Stratford</option>
                            <option value="wembley">Wembley</option>
                            <option value="west-norwood">West Norwood</option>
                            <option value="westminster">Westminster</option>
                        </select>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <select class="dropdown" data-settings='{"cutOff": 5}'>
                            <option value="">-- Any Purpose --</option>
                            <option value="rent">Rent</option>
                            <option value="sell">Sell</option>
                        </select>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <select class="dropdown" data-settings='{"cutOff": 5}'>
                            <option value="">-- Any Type --</option>
                            <option value="apartments">Apartments</option>
                            <option value="condos">Condos</option>
                            <option value="duplex">Duplex</option>
                            <option value="houses">Houses</option>
                            <option value="offices">Offices</option>
                            <option value="retail">Retail</option>
                            <option value="villa">Villa</option>
                        </select>
                    </div>
                </div><!-- ./row 1 -->
                <div class="row margin-div sercher-margin-bottom">
                    <div class="col-sm-6 col-md-3">
                        <select class="dropdown">
                            <option value="">-- Any Status --</option>
                            <option value="Normal">Normal</option>
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                            <option value="Sold">Sold</option>
                            <option value="Open House">Open House</option>
                        </select>
                    </div>
                    <div class="col-sm-6 col-md-2 margin-bottom">
                        <span id="label-bathroom" data-text="Bathroom"></span>
                        <input class="form-control" type="text" name="bathroom" id="bathroom" value="3" />
                    </div>
                    <div class="col-sm-6 col-md-2 margin-bottom">
                        <span id="label-bedroom" data-text="Bedroom"></span>
                        <input class="form-control" type="text" name="bedroom" id="bedroom" value="2" />
                    </div>
                    <div class="col-sm-6 col-md-2 margin-bottom">
                        <span id="label-property-size" data-text="Size"></span>
                        <input class="form-control" type="text" name="property-size" id="property-size" value="120" />
                    </div>
                    <div class="col-sm-12 col-md-3 margin-bottom">
                        <div class="slider" id="price-range"></div>
                        <div class="price-slider price">
                            <span id="price-value-min"></span>
                            <span class="separator">$</span>
                            <span id="price-value-max"></span>
                        </div>
                    </div>
                </div><!-- ./row 2 -->
                <div class="row filter hide-filter hidden-xs hidden-sm">
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Swimming Pool" checked></div>
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Fire Extinguisher" checked></div>
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Close to School"></div>
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Air Conditioning" checked></div>
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Built-in Kitchen" checked></div>
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Business District"></div>
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Pet Allowed" checked></div>
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Health Club"></div>
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Balcony" checked></div>
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Dryer"></div>
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Solar Heat" checked></div>
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Wine Cellar" checked></div>
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Hospital"></div>
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Sport Club" checked></div>
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Golf Course"></div>
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Lake View"></div>
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Backyard" checked></div>
                    <div class="col-xs-6 col-sm-4 col-md-3"><input class="labelauty" type="checkbox" data-labelauty="Laundry" checked></div>
                </div><!-- ./filter -->
                <div class="margin-div footer">
                    <button type="button" class="btn btn-default more-button hidden-xs hidden-sm">More filters</button>
                    <button type="button" class="btn btn-default search-button">advanced search</button>
                </div><!-- ./footer -->
            </div><!-- ./searcher -->
        </div><!-- search-options -->
    </div><!-- search-container fixed-map -->
</section>