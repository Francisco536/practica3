<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://unpkg.com/aframe-environment-component@1.1.0/dist/aframe-environment-component.min.js"></script>
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://libs.zappar.com/zappar-aframe/0.3.6/zappar-aframe.js"></script>

    <title>Objet 3D</title>
  </head>
  <body>
    <a-scene>
      <a-entity camera zappar-camera></a-entity>

      <a-camera> </a-camera>
      <a-entity zappar-instant="placement-mode: true;" id="my-instant-tracker">
        <a-entity daydream-controls></a-entity>
        <a-entity
          gltf-model="ob.glb"
          scale=" .1 .1 .1"
          animation="property: rotation; to: 0 -180 0; dur: 2000; easing: linear; loop: true"
        ></a-entity>
        <a-entity daydream-controls="hand: left"></a-entity>
        <a-entity daydream-controls="hand: right"></a-entity>

        <a-entity
          gltf-model="untitled.glb"
          scale=" .1 .1 .1"
          animation="property: rotation; to: 9 -10 0; dur: 2000; easing: linear; loop: true"
        ></a-entity>
      </a-entity>
      <script>
        let myInstantTracker = document.getElementById("my-instant-tracker");
        document.body.addEventListener("click", () => {
          myInstantTracker.setAttribute(
            "zappar-instant",
            "placement-mode: false;"
          );
        });
      </script>
      <a-entity id="mouseCursor" cursor="rayOrigin: mouse"></a-entity>

      <a-entity
        id="box"
        geometry="primitive: box"
        material="color: red"
        position="2 1.9 -4"
        rotation="0 30 0"
        animation__mouseenter="property:
      components.material.material.color; type: color; from: red; to: blue;
      startEvents: mouseenter; dur: 500"
        animation__mouseleave="property:
      components.material.material.color; type: color; from: blue; to: yellow;
      startEvents: mouseleave; dur: 500"
      ></a-entity>
    </a-scene>
  </body>
</html>
