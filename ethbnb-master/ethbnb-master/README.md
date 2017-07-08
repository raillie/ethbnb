# ethbnb PHP wrapper for ethbnb API.

## Installation
Add to composer.json

```"raillie/ethbnb": "dev-master"```

## Usage
### Initialize
```php
$ethbnb = new ethbnb('<your api key>');
```

### How to get an API key
Log into ethbnb.com, open up the web developer console, go to the network tab, filter by type json, and look at the url and find "client_id".

### Making API Calls

#### Listings
```php
// Search
$request = new SearchRequest();
$request->setLocale("en-US");
$request->setCurrency("USD");
$request->setFormat("for_search_results_with_minimal_pricing");
$request->setLimit(10);
$request->setOffset(0);
$request->setFetchFacets(true);
$request->setGuests(1);
$request->setIb(false);
$request->setIbAddPhotoFlow(true);
$request->setLocation("Lake Tahoe, CA, US");
$request->setMinBathrooms(0);
$request->setMinBedrooms(0);
$request->setMinBeds(1);
$request->setMinNumPicUrls(10);
$request->setPriceMax(210);
$request->setPriceMin(40);
$request->setSort(1);
$request->setUserLat(37.3398634);
$request->setUserLng(-122.04555164);
$listings = $ethbnb->listings()->search($request);

// Get listing
$request = new ListingRequest(<listing id>);
$listing = $ethbnb->listings()->view($request);

// Get listings for user
$request = new UserListingsRequest(<user id>);
$listingsForUser = $ethbnb->listings()->allForUser($request);
```

#### Reviews
```php
// Get reviews for listing
$request = new ListingReviewsRequest(<listing id>);
$reviews = $ethbnb->reviews()->allForListing($request);
```

#### Users
```php
// Get user
$request = new UserRequest(<user id>);
$user = $ethbnb->users()->view($request);
```
