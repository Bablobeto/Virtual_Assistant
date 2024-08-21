import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/diagnosis",
        component: () => import("./components/DiagnosisComponent.vue"),
    },
    {
        path: "/assessment",
        component: () => import("./components/AssessmentComponent.vue"),
    },
    {
        path: "/assessment-streamline",
        component: () => import("./components/AssessmentStreamlineComponent.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
