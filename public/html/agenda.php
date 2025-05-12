<!-- Agenda Page Section -->
<section class="admincontact main-content">
    <h1>Agenda & Events</h1>
    <table>
        <thead>
        <tr>
            <th>Event</th>
            <th>Location</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody id="agenda">
        <tr data-event="speedrun">
            <td>BLD Charity Speedrun Showdown</td>
            <td>Sponsor Run / Charity Event</td>
            <td>July 13, 2025</td>
        </tr>
        <tr data-event="bbq">
            <td>Annual Bloodline BBQ Bash</td>
            <td>Community Meet-Up / BBQ</td>
            <td>August 24, 2025</td>
        </tr>
        <tr data-event="showdown">
            <td>BLD 2v2 Ultimate Showdown</td>
            <td>Tournament (Valorant / CS2 / Rocket League)</td>
            <td>October 5–7, 2025</td>
        </tr>
        </tbody>
    </table>
</section>
git a
<script>
    // Grab all rows inside #agenda
    const rows = document.querySelectorAll("#agenda tr");

    rows.forEach((row) => {
        row.addEventListener("click", () => {
            let event = row.dataset.event;

            if (event === "speedrun") {
                alert("You clicked speedrun event");
            } else if (event === "bbq") {
                alert("You clicked bbq event");
            } else if (event === "showdown") {
                alert("You clicked showdown event");
            }
        });
    });
</script>
