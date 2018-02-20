function zoogooglemaps_init(key)
{
	var script = document.createElement("script");
	script.type = "text/javascript";
	if (typeof key != "undefined")
		script.src = "//maps.googleapis.com/maps/api/js?key=" + key + "&callback=zoogooglemaps";
	else
		script.src = "//maps.googleapis.com/maps/api/js?callback=zoogooglemaps";
	document.body.appendChild(script);
}

function zoogooglemaps_getpov(st, latlng)
{
	new google.maps.StreetViewService().getPanoramaByLocation(latlng, 100, function (streetViewPanoramaData, status)
	{
		if (status === google.maps.StreetViewStatus.OK)
		{
			var point = streetViewPanoramaData.location.latLng;
			var heading = google.maps.geometry.spherical.computeHeading(point, latlng);            

			st.setPosition(latlng);
			st.setPov({
				heading: heading,
				zoom: 1,
				pitch: 0
			});
			st.setVisible(true);
			google.maps.event.trigger(st, 'resize');
		}
	});
}

function zoogooglemaps_resize()
{
	if (gmap_resize_list.length == 0)
		return false;
	
	var i, j;
	
	for (i = 0; i < gmap_resize_list.length; i++)
	{
		if (gmap_resize_list[i] instanceof google.maps.Map)
		{
			if (typeof gmap_resize_list[i].zoogooglemaps_bounds == "undefined")
			{
				var center = gmap_resize_list[i].getCenter();
				google.maps.event.trigger(gmap_resize_list[i], "resize");
				gmap_resize_list[i].setCenter(center);
			} else {
				google.maps.event.trigger(gmap_resize_list[i], "resize");
				
				if (gmap_resize_list[i].zoogooglemaps_bounds.length > 0)
				{
					var bounds = new google.maps.LatLngBounds();
					for (j = 0; j < gmap_resize_list[i].zoogooglemaps_bounds.length; j++)
					{
						bounds.extend(new google.maps.LatLng(gmap_resize_list[i].zoogooglemaps_bounds[j][0], gmap_resize_list[i].zoogooglemaps_bounds[j][1]));
					}
					gmap_resize_list[i].fitBounds(bounds);
				}
				
			}
		} else if (gmap_resize_list[i] instanceof google.maps.StreetViewPanorama) {
			google.maps.event.trigger(gmap_resize_list[i], "resize");
		}
	}
}
